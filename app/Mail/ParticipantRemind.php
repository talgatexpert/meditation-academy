<?php

namespace App\Mail;

use App\Models\Comment;
use App\Models\Participant;
use App\Models\Template;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ParticipantRemind extends Mailable
{
    use Queueable, SerializesModels;

    public $template;
    public function __construct(Participant $participant)
    {
        // Находим шаблон письма
        $this->template = Template::where('name', Template::PARTICIPANT_REMIND_STEP . $participant->step)->firstOrFail();
        $this->template->setParticipant($participant);

        // Меняем отправителя письма
        $this->from($this->template->sender_email, $this->template->sender_name);
    }
    public function build()
    {
        $subject = $this->template->getSubject();
        $body = $this->template->getBody();
        return $this->subject($subject)->view('emails.master', compact('subject', 'body'));
    }
}
