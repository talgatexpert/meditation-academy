<?php

namespace App\Mail;

use App\Models\Participant;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CuratorNotAssigned extends Mailable
{

    use Queueable, SerializesModels;

    /**
     * Привязанный участник
     *
     * @var Participant
     */
    public $participant;

    /**
     * Create a new message instance.
     *
     * @param Participant $participant
     */
    public function __construct(Participant $participant)
    {
        $this->participant = $participant;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Участнику "' . $this->participant->name . '" не назначен куратор')
            ->markdown('vendor.notifications.email', [
                'level' => 'default',
                'greeting' => 'Участнику не назначен куратор!',
                'introLines' => [
                    'Имя: ' . $this->participant->name,
                    'Подтвержден: ' . $this->participant->getVerificationDateTime(),
                ],
                'outroLines' => [],
                'salutation' => '',
            ]);
    }

}
