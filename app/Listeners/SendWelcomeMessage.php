<?php

namespace App\Listeners;

use App\Events\ParticipantVerified;
use App\Models\Message;
use App\Models\MessageTemplate;

class SendWelcomeMessage
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
     * @param ParticipantVerified $event
     * @return void
     */
    public function handle(ParticipantVerified $event)
    {
        // Находим шаблон сообщения
        $template = MessageTemplate::where('name', MessageTemplate::WELCOME)->firstOrFail();
        $template->setParticipant($event->participant);

        Message::create([
            'participant_id' => $event->participant->id,
            'title' => $template->getTitle(),
            'body' => $template->getBody(),
            'new' => true,
        ]);
    }

}
