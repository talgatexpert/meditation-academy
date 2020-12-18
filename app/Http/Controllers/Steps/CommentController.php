<?php

namespace App\Http\Controllers\Steps;

use App\Events\CommentSent;
use App\Events\ParticipantGraduated;
use App\Events\ParticipantNewCommented;
use App\Events\ParticipantNextStep;
use App\Http\Controllers\Controller;
use App\Http\Requests\Steps\CommentStoreRequest;
use App\Http\Requests\Steps\CommentUpdateRequest;
use App\Models\Comment;
use App\Models\Participant;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    // Максимальное кол-во отчетов, которое мы показываем за раз
    public const REPORTS_LIMIT = 50;
    public const STATUS_COMMENT = 0;
    public const STATUS_FEEDBACK = 1;

    /**
     * Динамическая подгрузка комментариев
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return response()->json(['status' => 'OK'] + self::getComments($request->id ?? 0, $request->step ?? 0));
    }

    /**
     * Отправка отчета или ответ на комментарий
     *
     * @param CommentStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommentStoreRequest $request)
    {
        $guard = \Auth::guard('participant');
        $step = $guard->check() ? $guard->user()->step : null;
        $status = self::STATUS_COMMENT;

        $comment = Comment::find($request->get('parent_id'));
        if ($comment && $comment->status == self::STATUS_FEEDBACK){
               $status = self::STATUS_FEEDBACK;
        }
        // Создаем комментарий
        $attributes = [
            'participant_id' => $request->curator_reply ? null : $guard->id(),
            'curator_id' => $request->curator_reply ? \Auth::id() : null,
            'step' => ($request->curator_reply || $request->parent_id) && $request->step ? $request->step : $step,
            'body' => $request->body,
            'status' => $status
        ];
        if ($request->curator_reply || $request->parent_id) {
            $attributes = \Arr::prepend($attributes, $request->curator_reply ?? $request->parent_id, 'parent_id');
        }
        $comment = Comment::create($attributes);
        $report = $request->curator_reply ?  Comment::find($request->curator_reply) :  Comment::find($request->parent_id);

        if ($request->curator_reply) {
            // Переводим участника на след. шаг, если куратор впервые ответил на отчет
            if (!($curator_report = Comment::find($request->curator_reply))->reportHasCuratorReply([$comment->id])) {
                $curator_report->participant->nextStep($comment);
            }else{
                event(new ParticipantNewCommented( $report->participant, $comment));

            }
        } else {
            // Если участником был написан отчет, необходимо сохранить время публикации
            if ($comment->isReport()) {
                $comment->participant->step_reported_at = now();
                $comment->participant->one_signal = $request->has('one_signal_client_id') && !is_null($request->get('one_signal_client_id')) ? $request->get('one_signal_client_id') : $comment->participant->one_signal;
                $comment->participant->save();
            }

            // Уведомляем менеджеров и назначенного куратора
            event(new CommentSent($comment));
        }

        return response()->json(['status' => 'OK'] + ($comment->isReport() ? CommentController::getComments(0, $step) : ['reportId' => $comment->parent_id, 'comment' => view('includes.steps.comment-level-2', compact('comment', 'report'))->render()]));
    }

    /**
     * Принятие финального отчета
     *
     * @param CommentStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store_final(CommentStoreRequest $request)
    {
        $attributes = [];
        $guard = \Auth::guard('participant');
        $user = $guard->user();
        $step = $user->step;

        // Создаем комментарий
        $attributes[] = [
            'participant_id' => $request->curator_reply ? null : $guard->id(),
            'curator_id' => $request->curator_reply ? \Auth::id() : null,
            'step' => ($request->curator_reply || $request->parent_id) && $request->step ? $request->step : $step,
            'body' => $request->body,
            'status' => self::STATUS_COMMENT
        ];
        // создаем отзыв
        if ($request->has('comment')) {
            $attributes[] = [
                'participant_id' => $request->curator_reply ? null : $guard->id(),
                'curator_id' => $request->curator_reply ? \Auth::id() : null,
                'step' => ($request->curator_reply || $request->parent_id) && $request->step ? $request->step : $step,
                'body' => $request->comment,
                'status' => self::STATUS_FEEDBACK,
                'publish' => 1
            ];
        }

        if ($request->curator_reply || $request->parent_id) {
            $attributes = \Arr::prepend($attributes, $request->curator_reply ?? $request->parent_id, 'parent_id');
        }
        foreach ($attributes as $attribute){
            $comment = Comment::create($attribute);

            // Выпускаем участника если он на 7шаге и еще не выпущен
            if ($comment->step == 7 && $user->graduate == 0){
                $user->graduate = 1;
                $user->certificate = mb_strtoupper(\Str::random(10));
                $now = Carbon::now();
                $user->graduated_at = $now;
                $user->certificate_expiration_at = $now->addYear();
                $user->save();

                $participant =  Participant::where('id', $user->id)->firstOrFail();
                event(new ParticipantGraduated($participant, $comment));
            }

            if ($request->curator_reply) {
                // Переводим участника на след. шаг, если куратор впервые ответил на отчет
//            if (!($report = Comment::find($request->curator_reply))->reportHasCuratorReply([$comment->id])) {
//                $report->participant->nextStep($comment);
//            }
            } else {
                // Если участником был написан отчет, необходимо сохранить время публикации
                if ($comment->isReport()) {
                    $comment->participant->step_reported_at = now();
                    $comment->participant->save();
                }

                // Уведомляем менеджеров и назначенного куратора
                event(new CommentSent($comment));
            }
        }


//        return response()->json(['status' => 'OK'] + ($comment->isReport() ? CommentController::getComments(0, $step) : ['reportId' => $comment->parent_id, 'comment' => view('includes.steps.comment-level-2', compact('comment'))->render()]));
        // Перенаправляем на страницу с письмами и показываем попап с поздравлениями
        return redirect()->route('messages.index')->with('popup', [
            'title' => 'Поздравляем с завершением курса!',
            'text' => 'Вас ждёт сертификат!'
        ]);

//        return redirect()->route('home');
    }

    /**
     * Редактирование отчета\комментария
     *
     * @param CommentUpdateRequest $request
     * @param Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function update(CommentUpdateRequest $request, Comment $comment)
    {
        $comment->update($request->validated());
//        $report = $request->curator_reply ?  Comment::find($request->curator_reply) :  Comment::find($request->parent_id);

        return response()->json(['status' => 'OK', 'comment' => $comment->isReport() ? view('includes.steps.comment', ['report' => $comment, 'step' => $comment->step])->render() : view('includes.steps.comment-level-2', ['comment' => $comment, 'report' => $comment])->render()]);
    }

    /**
     * Удаление отчета\комментария
     *
     * @param Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        // Проверка прав доступа
        abort_if(!$comment->canBeEditedByOwner(), 403);

        $comment->delete();

        // Вычисляем общее кол-во отчетов
        $reportsCount = Comment::reportsCountAtStep($comment->step);

        return response()->json(['status' => 'OK', 'reportsCount' => $reportsCount]);
    }

    /**
     * Возвращает массив со всей необходимой информацией для обновления комментариев
     *
     * @param int $id
     * @param int $step
     * @param bool $render
     * @return array
     */
    public static function getComments(int $id, int $step, bool $render = true): array
    {
        // Вычисляем общее кол-во отчетов и получаем нужную порцию отчетов на указанном шаге
        $reportsCount = Comment::reportsCountAtStep($step);

        $comments = $reportsCount ? Comment::with([
            'comments' => function($q){
                $q->orderBy('created_at', 'asc');
            },
            'comments.children' => function($q){
                $q->orderBy('created_at', 'asc');

            },
            'comments.children.participant',
            'comments.children.curator',
            'comments.children.likes',

            'comments.participant',
            'comments.curator',
            'comments.likes',
            'participant',
            'likes',
        ])->where('id', $id > 0 ? '<' : '>', $id)
            ->reports()->ofStep($step)->orderBy('created_at', 'desc')->limit(self::REPORTS_LIMIT + 1)->get() : collect();
//        dump($comments[0]);

        // Определяем, нужно ли показывать кнопку "Показать еще"
        $showMore = false;
        if ($comments->count() == self::REPORTS_LIMIT + 1) {
            $comments = $comments->slice(0, self::REPORTS_LIMIT);
            $showMore = true;
        }

        return [
            'lastId' => \Arr::get(\Arr::last($comments->toArray()), 'id'),
            'reportsCount' => $reportsCount,
            'comments' => $render ? view('includes.steps.comments-items', compact('comments', 'step'))->render() : $comments,
            'showMore' => $showMore,
        ];
    }

}
