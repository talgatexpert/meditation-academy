<?php

namespace App\Http\Controllers\Admin\Comments;

use App\Events\ParticipantNewCommented;
use App\Http\Controllers\Admin\Controller;
use App\Http\Requests\Admin\Comments\Steps\StoreRequest;
use App\Http\Requests\Admin\Comments\Steps\UpdateRequest;
use App\Models\Comment;
use App\Models\Participant;
use App\Models\User;
use Illuminate\Http\Request;

class StepController extends Controller
{
    public const STATUS_COMMENT = 0;
    public const STATUS_FEEDBACK = 1;

    /**
     * Комментарии на страницах заданий
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Проверка прав доступа
        abort_unless(\Gate::any([User::ABILITY_ADMIN, User::ABILITY_MANAGER, User::ABILITY_CURATOR]), 403);

        return view('pages.admin.comments.steps.index');
    }

    /**
     * Обработка DataTable
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax(Request $request)
    {
        $dtDraw = $request->input('draw');

        // Проверка прав доступа
        if (\Gate::any([User::ABILITY_ADMIN, User::ABILITY_MANAGER, User::ABILITY_CURATOR])) {
            $comments = Comment::has('curator')->orHas('participant')->with( ['participant', 'comments', 'likes','curator'])->where('comments.status', '=',self::STATUS_COMMENT);

            $dtStart = $request->input('start', 0);
            $dtLength = $request->input('length', 25);
            $dtColumns = $request->input('columns', []);
            $dtOrder = $request->input('order', []);
            $dtOrderColumn = \Arr::get($dtColumns, \Arr::get($dtOrder, '0.column', 0) . '.name', 'id');
            $dtOrderDir = \Arr::get($dtOrder, '0.dir', 'desc');
            $dtSearch = $request->input('search.value', '');

            // Поиск
            if ($dtSearch != '') {
                // Если в поисковой строке используется специальный синтаксис для поиска по id комментария
                if (\Str::startsWith($dtSearch, ['№', '#'])) {
                    $comments->where('id', \Str::substr($dtSearch, 1));
                } else {
                    $comments->where(function ($query) use ($dtColumns, $dtSearch) {

                        foreach ($dtColumns as $column) {
                            $columnName = \Arr::get($column, 'name', '');
                            $columnSearchable = \Arr::get($column, 'searchable', 'false');
                            if ($columnName != '' && $columnSearchable == 'true') {
                                if ($columnName == 'author') {
                                    // При поиске по автору используем комплексный подход
                                    $query->orWhere(function ($query) use ($dtSearch) {
                                        $query->whereIn('participant_id', function ($query) use ($dtSearch) {
                                            $query->select('id')->from('participants')->where('name', 'like', '%' . $dtSearch . '%')->orWhere('email', 'like', '%' . $dtSearch . '%');
                                        });
                                    });
                                } elseif ($columnName == 'step') {
                                    // При поиске по шагу используем комплексный подход
                                    if (\Str::contains($dtSearch, ['step-1', 'step 1', 'meditation', 'posture'])) {
                                        $query->orWhere($columnName, '=', 1);
                                    }
                                    if (\Str::contains($dtSearch, ['step-2', 'step 2', 'meditation', 'hands'])) {
                                        $query->orWhere($columnName, '=', 2);
                                    }
                                    if (\Str::contains($dtSearch, ['step-3', 'step 3', 'meditation', 'dynamic'])) {
                                        $query->orWhere($columnName, '=', 3);
                                    }
                                    if (\Str::contains($dtSearch, ['step-4', 'step 4', 'breathing'])) {
                                        $query->orWhere($columnName, '=', 4);
                                    }
                                    if (\Str::contains($dtSearch, ['step-5', 'step 5', 'happyday'])) {
                                        $query->orWhere($columnName, '=', 5);
                                    }
                                    if (\Str::contains($dtSearch, ['step-6', 'step 6', 'counting'])) {
                                        $query->orWhere($columnName, '=', 6);
                                    }
                                    if (\Str::contains($dtSearch, ['step-7', 'step 7', 'gratitude'])) {
                                        $query->orWhere($columnName, '=', 7);
                                    }
                                } elseif ($columnName == 'created_at') {
                                    return $query->orWhereRaw("DATE_FORMAT(created_at, '%d.%m.%Y %H:%i:%s') like ?", ['%' . $dtSearch . '%']);
                                } else {
                                    $query->orWhere($columnName, 'like', '%' . $dtSearch . '%');
                                }
                            }
                        }
                    });
                }
            }

            // Всего записей в БД после применения фильтров
            $total = $comments->count();

            // Сортировка
            if ($dtOrderColumn == 'author') {
                $comments->join('participants', 'participants.id', '=', 'comments.participant_id')->orderBy('participants.name', $dtOrderDir);
            } elseif ($dtOrderColumn == 'likes') {
                $comments->withCount('likes')->orderBy('likes_count', $dtOrderDir);
            } else {
                $comments->orderBy($dtOrderColumn, $dtOrderDir);
            }

            // Формируем данные для таблицы
            $data = [];
            foreach ($comments->skip($dtStart)->take($dtLength)->get() as $comment) {
                $data[] = [
                    'id' => $comment->id,
                    'author' => view('pages.admin.comments.steps.columns.author', compact('comment'))->render(),
                    'body' => view('pages.admin.comments.steps.columns.body', compact('comment'))->render(),
                    'likes' => $comment->likes->count(),
                    'step' => $comment->stepPage,
                    'created_at' => $comment->created_at->format('d.m.Y H:i'),
                    'actions' => view('pages.admin.comments.steps.columns.actions', compact('comment'))->render(),
                ];
            }

            return response()->json([
                'draw' => $dtDraw,
                'recordsTotal' => $total,
                'recordsFiltered' => $total,
                'data' => $data,
            ]);
        } else {
            return response()->json([
                'draw' => $dtDraw,
                'recordsTotal' => 0,
                'recordsFiltered' => 0,
                'data' => [],
            ]);
        }
    }

    /**
     * Модальная форма добавления ответа
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // Проверка прав доступа
        abort_unless(\Gate::any([User::ABILITY_ADMIN, User::ABILITY_MANAGER, User::ABILITY_CURATOR]), 403);

        $comment = null;
        $targetComment = Comment::findOrFail($request->input('target_id'));
        $curators = $this->getAvailableCurators();

        return view('pages.admin.comments.steps.modal', compact('comment', 'targetComment', 'curators'));
    }

    /**
     * Добавление ответа
     *
     * @param StoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        // Находим отчет
        $report = Comment::findOrFail($request->parent_id);

        // Создаем комментарий
        $attributes = [
            'parent_id' => $request->parent_id,
            'curator_id' => $request->curator_id,
            'step' => $report->step,
            'body' => $request->body,
            'status' => self::STATUS_COMMENT,
        ];
        $comment = Comment::create($attributes);

        // Переводим участника на след. шаг, если куратор впервые ответил на отчет
        if (!$report->reportHasCuratorReply([$comment->id])) {
            if (is_null($report->participant)){
                $comment->delete();
            }else{
                $report->participant->nextStep($comment);
            }
        }else{
            event(new ParticipantNewCommented( $report->participant, $comment));

        }

        $request->session()->flash('status', 'Ваш ответ был успешно опубликован в отчете №' . $report->id . '.');

        return response()->json([
            'status' => 'OK',
            'redirect' => route('admin.comments.steps.index'),
        ]);
    }

    /**
     * Модальная форма редактирования комментария
     *
     * @param Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        // Проверка прав доступа
        abort_unless(\Gate::any([User::ABILITY_ADMIN, User::ABILITY_MANAGER, User::ABILITY_CURATOR]), 403);

        return view('pages.admin.comments.steps.modal', compact('comment'));
    }

    /**
     * Редактирование комментария
     *
     * @param UpdateRequest $request
     * @param Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Comment $comment)
    {
        $data = ['status' => 'OK'];

        $comment->update($request->validated());

        if ($comment->wasChanged()) {
            $request->session()->flash('status', ($comment->isReport() ? 'Отчет' : 'Комментарий') . ' №' . $comment->id . ' был успешно изменен.');
            $data['redirect'] = route('admin.comments.steps.index');
        }

        return response()->json($data);
    }

    /**
     * Удаление комментария
     *
     * @param Comment $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        // Проверка прав доступа
        abort_unless(\Gate::any([User::ABILITY_ADMIN, User::ABILITY_MANAGER, User::ABILITY_CURATOR]), 403);

        // Нельзя удалять отчет, в котором есть комментарии
        if ($comment->reportHasComments()) {
            return redirect()->route('admin.comments.steps.index')->with('error', 'Нельзя удалять отчет, в котором есть комментарии.');
        }

        $comment->delete();

        return redirect()->route('admin.comments.steps.index')->with('status', ($comment->isReport() ? 'Отчет' : 'Комментарий') . ' №' . $comment->id . ' был успешно удален.');
    }

    /**
     * Возвращает список доступных кураторов
     *
     * @return array
     */
    private function getAvailableCurators(): array
    {
        return ['' => ''] + User::active()->curator()->pluck('name', 'id')->toArray();
    }

}
