<?php

namespace App\Listeners;

use App\Events\ParticipantCreated;
use App\Mail\EmailVerification;

class SendEmailVerificationNotification
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
     * @param ParticipantCreated $event
     * @return void
     */
    public function handle(ParticipantCreated $event)
    {
        // Создаем экземпляр письма с подтверждением email'а
        dispatch(new \App\Jobs\SendEmailVerificationNotification($event->participant));
    }

}
