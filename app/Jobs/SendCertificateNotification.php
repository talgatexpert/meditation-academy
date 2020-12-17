<?php

namespace App\Jobs;

use App\Mail\ParticipantGraduate;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendCertificateNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    public $event;

    /**
     * SendCertificateNotification constructor.
     * @param $event
     */
    public function __construct($event)
    {
        $this->event = $event;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Создаем экземпляр письма с оповещением участника об ответе куратора

        // Создаем получателя
        $mail = new ParticipantGraduate( $this->event->participant,  $this->event->comment);

        $recipient = new \stdClass();
        $recipient->email =  $this->event->participant->email;
        $recipient->name =  $this->event->participant->name;
        // Отправляем участнику письмо
        \Mail::to($recipient)->send($mail);

    }
}
