<?php

namespace App\Listeners;

use App\Events\ParticipantVerified;

class SendNewParticipantNotification
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
        // Ставим в очередь задачу по отправке всем менеджерам и кураторам письма о новом участнике
        dispatch(new \App\Jobs\SendNewParticipantNotification($event->participant));
    }

}
