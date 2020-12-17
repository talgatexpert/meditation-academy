<?php

namespace App\Jobs;

use App\Mail\CuratorNotReplied;
use App\Mail\NewParticipant;
use App\Models\Participant;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendCuratorNotRepliedNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $participant;

    /**
     * SendCuratorNotRepliedNotification constructor.
     * @param $participant
     */
    public function __construct($participant)
    {
        $this->participant = $participant;
    }
    /**
     * Create a new job instance.
     *
     * @return void
     */


    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Создаем экземпляр письма
        $mail = new CuratorNotReplied($this->participant);

        // Отправляем письмо всем активным менеджерам или админам, в зависимости от уровня ожидания назначения куратора
        $users = [];
        $participant = $this->participant;

        if ($this->participant->curator_pending_level == Participant::CURATOR_PENDING_LEVEL_MANAGER) {
            $users = User::active()->where(function (Builder $query) use ($participant) {
                return $query->manager()->orWhere->appointedCurator($participant->curator_id);
            })->get();
        } elseif ($this->participant->curator_pending_level == Participant::CURATOR_PENDING_LEVEL_ADMIN) {
            $users = User::active()->where(function (Builder $query) use ($participant) {
                return $query->manager()->orWhere->appointedCurator($participant->curator_id)->orWhere->administrator();
            })->get();
        }


        foreach ($users as $user) {
            // Необходимо каждый раз очищать массив с получателями, иначе каждое след. письмо будет содержать в себе пред. адрес
            $mail->to = [];
            \Mail::to($user)->send($mail);
        }
    }
}
