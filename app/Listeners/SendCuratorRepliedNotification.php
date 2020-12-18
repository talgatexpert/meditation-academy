<?php

namespace App\Listeners;

use App\Events\ParticipantNextStep;
use App\Mail\CuratorReplied;

class SendCuratorRepliedNotification
{

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    public function handle($event)
    {

        if (!is_null($event->participant->one_signal)) {

            $userId = $event->participant->one_signal;
            $heading = "Вам ответил куратор";
            \OneSignal::setParam('chrome_web_icon', asset('assets/img/logo.png'))->sendNotificationToUser(
                "Шаг " . $event->comment->step . ": Новый ответ на ваш комментарий.",
                $userId,
                $url = $event->comment ? route('steps.' . $event->comment->step, ['participant_token' =>  $event->participant->getRememberToken() ]) . '#comment-' . $event->comment->id : '#',
                $data = null,
                $buttons = null,
                $schedule = null,
                $heading

            );
        }
        // Создаем экземпляр письма с оповещением участника об ответе куратора
        $mail = new CuratorReplied($event->participant, $event->comment);

        // Создаем получателя
        $recipient = new \stdClass();
        $recipient->email = $event->participant->email;
        $recipient->name = $event->participant->name;

        // Отправляем участнику письмо
        \Mail::to($recipient)->send($mail);
    }

}
