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

        dispatch(new \App\Jobs\SendCuratorRepliedNotification($event));
    }

}
