<?php

namespace App\Listeners;

use App\Events\ParticipantGraduated;
use App\Models\Message;
use App\Models\MessageTemplate;

class SendCertificateNotification
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

    /**
     * Handle the event.
     *
     * @param ParticipantGraduated $event
     * @return void
     */
    public function handle(ParticipantGraduated $event)
    {
        // Создаем экземпляр письма с оповещением участника об ответе куратора
        $template = MessageTemplate::where('name',  MessageTemplate::CERTIFICATE)->firstOrFail();
        $template->setParticipant($event->participant);


        Message::create([
            'participant_id' => $event->participant->id,
            'title' => $template->getTitle(),
            'body' => $template->getBody(),
            'new' => true,
        ]);
        dispatch(new \App\Jobs\SendCertificateNotification($event));

    }

}
