<?php

namespace App\Jobs;

use App\Mail\NewComment;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendNewCommentNotification implements ShouldQueue
{

    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Привязанный комментарий
     *
     * @var Comment
     */
    public $comment;

    /**
     * Create a new job instance.
     *
     * @param Comment $comment
     */
    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $comment = $this->comment;
        // Создаем экземпляр письма
        $token = null;
        // Отправляем письмо всем активным менеджерам и куратору, который был назначен автору комментария
        $users = User::active()->where(function (Builder $query) use ($comment) {
            $query = $query->manager();
            if ($comment->participant->curator_id) {
                 $query->orWhere->where('id', $comment->participant->curator_id);

            } else {
                // Если у участника нет назначенного куратора, письмо нужно отправить еще и админам
                return $query->orWhere->administrator();
            }
        })->get();


        foreach ($users as $user) {
            // Генерируем токены для каждого юзера отдельно
            if ($this->comment->participant->curator_id === $user->id) {
                // проверяем есть ли у пользователя уже токен если да используем текущий  || или создаем новый токен
                if (is_null($user->remember_token)){
                    $auth = \Auth::loginUsingId($user->id, true);
                    $token = $auth ? $auth->remember_token : null;
                }else{
                    $token = $user->remember_token;
                }
                \Mail::to($user)->send( new NewComment($this->comment, $token));

            }else{
                if (is_null($user->remember_token)){
                    $auth = \Auth::loginUsingId($user->id, true);
                    $token = $auth ? $auth->remember_token : null;
                }else{
                    $token = $user->remember_token;
                }
                \Mail::to($user)->send( new NewComment($this->comment, $token));

            }


        }
    }

    /**
     * The job failed to process.
     *
     * @param \Exception $exception
     * @return void
     */
    public function failed(\Exception $exception)
    {
        // ...
    }

}
