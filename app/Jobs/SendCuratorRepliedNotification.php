<?php

namespace App\Jobs;

use App\Mail\CuratorReplied;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use OneSignal;

class SendCuratorRepliedNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $event;

    /**
     * SendCuratorRepliedNotification constructor.
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
        if (!is_null( $this->event->participant->one_signal)) {

            $userId =  $this->event->participant->one_signal;
            $heading = "Вам ответил куратор";
            OneSignal::setParam('chrome_web_icon', asset('assets/img/logo.png'))->sendNotificationToUser(
                "Шаг " .  $this->event->comment->step . ": Новый ответ на ваш комментарий.",
                $userId,
                $url =  $this->event->comment ? route('steps.' .  $this->event->comment->step, ['participant_token' =>   $this->event->participant->getRememberToken() ]) . '#comment-' . $this->event->comment->id : '#',
                $data = null,
                $buttons = null,
                $schedule = null,
                $heading

            );
        }
        // Создаем экземпляр письма с оповещением участника об ответе куратора
        $mail = new CuratorReplied($this->event->participant,  $this->event->comment);

        // Создаем получателя
        $recipient = new \stdClass();
        $recipient->email =  $this->event->participant->email;
        $recipient->name =  $this->event->participant->name;

        // Отправляем участнику письмо
        \Mail::to($recipient)->send($mail);
    }
}
