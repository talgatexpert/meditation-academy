<?php

namespace App\Jobs;

use App\Mail\EmailVerification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendEmailVerificationNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $participant;

    /**
     * SendEmailVerificationNotification constructor.
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
        // Создаем экземпляр письма с подтверждением email'а
        $mail = new EmailVerification($this->participant);
        // Создаем получателя
        $recipient = new \stdClass();
        $recipient->email =  $this->participant->email;
        $recipient->name =  $this->participant->name;
        // Отправляем участнику письмо
        \Mail::to($recipient)->send($mail);
    }
}
