<?php

namespace App\Mail;

use App\Models\Comment;
use App\Models\Participant;
use App\Models\Template;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CuratorReplied extends Mailable
{

    use Queueable, SerializesModels;

    /**
     * Шаблон письма
     *
     * @var Template
     */
    private $template;

    /**
     * Create a new event instance.
     *
     * @param Participant $participant
     * @param Comment $comment
     * @return void
     */
    public function __construct(Participant $participant, Comment $comment)
    {
        // Находим шаблон письма
        $this->template = Template::where('name', Template::PARTICIPANT_CURATOR_REPLIED)->firstOrFail();
        $this->template->setParticipant($participant);
        $this->template->setComment($comment);

        // Меняем отправителя письма
        $this->from($this->template->sender_email, $this->template->sender_name);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = $this->template->getSubject();
        $body = $this->template->getBody();
        return $this->subject($subject)->view('emails.master', compact('subject', 'body'));
    }
}
