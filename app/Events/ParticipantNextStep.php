<?php

namespace App\Events;

use App\Models\Comment;
use App\Models\Participant;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ParticipantNextStep
{

    use Dispatchable, SerializesModels;

    /**
     * Привязанный участник
     *
     * @var Participant
     */
    public $participant;

    /**
     * Привязанный комментарий
     *
     * @var Comment
     */
    public $comment;

    /**
     * Create a new event instance.
     *
     * @param Participant $participant
     * @param Comment $comment
     * @return void
     */
    public function __construct(Participant $participant, Comment $comment)
    {
        $this->participant = $participant;
        $this->comment = $comment;
    }

}
