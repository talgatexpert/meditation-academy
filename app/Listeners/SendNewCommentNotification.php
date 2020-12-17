<?php

namespace App\Listeners;

use App\Events\CommentSent;

class SendNewCommentNotification
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
     * @param CommentSent $event
     * @return void
     */
    public function handle(CommentSent $event)
    {
        // Ставим в очередь задачу по отправке всем менеджерам и назначенному куратору письма о новом комментарии от участника
        dispatch(new \App\Jobs\SendNewCommentNotification($event->comment));
    }

}
