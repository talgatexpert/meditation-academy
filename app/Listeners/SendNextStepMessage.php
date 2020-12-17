<?php

namespace App\Listeners;

use App\Events\ParticipantNextStep;
use App\Models\Message;
use App\Models\MessageTemplate;

class SendNextStepMessage
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
     * @param ParticipantNextStep $event
     * @return void
     */
    public function handle(ParticipantNextStep $event)
    {
        // Находим шаблон сообщения
        $template = MessageTemplate::where('name', 'step' . $event->participant->step)->firstOrFail();
        $template->setParticipant($event->participant);

        Message::create([
            'participant_id' => $event->participant->id,
            'title' => $template->getTitle(),
            'body' => $template->getBody(),
            'new' => true,
        ]);
    }

}
