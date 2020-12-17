<?php

namespace App\Mail;

use App\Models\Participant;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CuratorNotReplied extends Mailable
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
            ->subject('Участнику "' . $this->participant->name . '" не прокомментирован отчет')
            ->markdown('vendor.notifications.email', [
                'level' => 'default',
                'greeting' => 'Необходимо прокомментировать комментарий участника',
                'introLines' => [
                    'Имя: ' . $this->participant->name,
                ],
                'outroLines' => [],
                'salutation' => '',
            ]);
    }
}
