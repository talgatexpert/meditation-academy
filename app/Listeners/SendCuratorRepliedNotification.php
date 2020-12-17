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

        $pushNotifications = new \Pusher\PushNotifications\PushNotifications(array(
            "instanceId" => strval(env('PUSHER_BEAMS_INSTANCE_ID')),
            "secretKey" => strval(env('PUSHER_BEAMS_SECRET_KEY')),
        ));
        if ($pushNotifications) {
            $publishResponse = $pushNotifications->publishToUsers(
                [strval($event->participant->id)],
                [
                    "web" => [
                        "notification" => [
                            "title" => "Вам ответил куратор",
                            "body" => "Шаг " . $event->comment->step . ": Новый ответ на ваш комментарий.",
                            'icon' => asset('assets/img/logo.png'),
                            'deep_link' => $event->comment ? route('steps.' . $event->comment->step, ['participant_token' =>  $event->participant->getRememberToken() ]) . '#comment-' . $event->comment->id : '#'
                        ]
                    ]
                ]);
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
