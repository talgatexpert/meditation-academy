<?php

namespace App\Events;

use App\Models\Participant;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ParticipantVerified
{

    use Dispatchable, SerializesModels;

    /**
     * Привязанный участник
     *
     * @var Participant
     */
    public $participant;

    /**
     * Create a new event instance.
     *
     * @param Participant $participant
     * @return void
     */
    public function __construct(Participant $participant)
    {
        $this->participant = $participant;
    }

}
