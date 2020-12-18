<?php

namespace App\Jobs;

use App\Mail\CuratorNotAssigned;
use App\Models\Participant;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendParticipantCuratorNotAssignedNotification implements ShouldQueue
{

    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Привязанный участник
     *
     * @var Participant
     */
    protected $participant;

    /**
     * Create a new job instance.
     *
     * @param Participant $participant
     */
    public function __construct(Participant $participant)
    {
        $this->participant = $participant;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Создаем экземпляр письма
        $mail = new CuratorNotAssigned($this->participant);

        // Отправляем письмо всем активным менеджерам или админам, в зависимости от уровня ожидания назначения куратора
        $users = [];
        if ($this->participant->curator_pending_level == Participant::CURATOR_PENDING_LEVEL_MANAGER) {
            $users = User::active()->manager()->get();
        } elseif ($this->participant->curator_pending_level == Participant::CURATOR_PENDING_LEVEL_ADMIN) {
            $users = User::active()->administrator()->get();
        }
        foreach ($users as $user) {
            // Необходимо каждый раз очищать массив с получателями, иначе каждое след. письмо будет содержать в себе пред. адрес
            $mail->to = [];

            \Mail::to($user)->send($mail);
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
