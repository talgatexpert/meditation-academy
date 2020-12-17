<?php

namespace App\Mail;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewComment extends Mailable
{

    use Queueable, SerializesModels;

    /**
     * Привязанный комментарий
     *
     * @var Comment
     */
    public $comment;
    public $token;

    /**
     * Create a new message instance.
     *
     * @param Comment $comment
     * @param null $token
     */
    public function __construct(Comment $comment, $token = null)
    {
        $this->comment = $comment;
        $this->token = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
//        $token = null;


        // Формируем URL для кнопки
        $actionUrl = route('steps.' . $this->comment->step, ['curator_reply' => $this->comment->id, 'token' => $this->token ]) . '#comment-' . $this->comment->id;

        return $this
            ->subject('Шаг ' . $this->comment->step . ': комментарий от "' . $this->comment->participant->name . '"')
            ->markdown('vendor.notifications.email', [
                'level' => 'default',
                'greeting' => 'Новый комментарий на шаге ' . $this->comment->step . '!',
                'introLines' => [
                    'Участник: ' . $this->comment->participant->name,
                    'Комментарий: ' . $this->comment->body,
                ],
                'actionText' => 'Перейти на сайт',
                'actionUrl' => $actionUrl,
                'displayableActionUrl' => $actionUrl,
                'outroLines' => [],
                'salutation' => '',
            ]);
    }

}
