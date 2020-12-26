<?php

namespace App\Mail;

use App\Models\Comment;
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
    public $token;

    /**
     * Create a new message instance.
     *
     * @param Participant $participant
     * @param string $token
     */
    public function __construct(Participant $participant, $token)
    {
        $this->participant = $participant;
        $this->token = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {





        $comment = $this->participant->comments()->latest()->get()[0];
        $actionUrl = route('steps.' . $this->participant->step, ['curator_reply' => $comment->id, 'token' => $this->token ]) . '#comment-' . $comment->id;
        return $this
            ->subject('Участнику "' . $this->participant->name . '" не прокомментирован отчет')
            ->markdown('vendor.notifications.email', [
                'level' => 'default',
                'greeting' => 'Необходимо ответить на комментарий участника',
                'introLines' => [
                    'Имя: ' . $this->participant->name,
                    'Шаг: ' . $this->participant->step
                ],
                'actionText' => 'Перейти на сайт',
                'actionUrl' => $actionUrl,
                'displayableActionUrl' => $actionUrl,
                'outroLines' => [],
                'salutation' => '',
            ]);
    }
}
