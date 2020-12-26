<?php

namespace App\Jobs;

use App\Mail\ParticipantRemind;
use App\Models\Participant;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendParticipantRemindNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $participant;

    /**
     * SendParticipantRemindNotification constructor.
     * @param $participant
     */
    public function __construct(Participant $participant)
    {
        $this->participant = $participant;
    }

    /**
     * Execute the job.
     *
     * @param $num
     * @param $words
     * @return void
     */

    private function num2word($num, $words)
    {
        $num = $num % 100;
        if ($num > 19) {
            $num = $num % 10;
        }
        switch ($num) {
            case 1: {
                return($words[0]);
            }
            case 2: case 3: case 4: {
            return($words[1]);
        }
            default: {
                return($words[2]);
            }
        }
    }

    public function handle()
    {
        if (!is_null($this->participant->one_signal)) {
            $diffDays = $this->participant->last_activity_at->diffInDays(now());
            if ($diffDays == 0){
                $diffDays = 14;
            }else{
                $diffDays = 14 - intval($diffDays);
            }
            $message = 'Через ' . $diffDays . ' ' . $this->num2word($diffDays, ['день', 'дня', 'дней']) .  ' ваша авторизация будет закрыта ';
            $userId =  $this->participant->one_signal;
            $heading = "Шаг " . $this->participant->step . ': ждем ваш отчет';

            if (empty($this->participant->getRememberToken())){
                $this->participant->setRememberToken(Str::random(60));
                $this->participant->save();
            }
            \OneSignal::setParam('chrome_web_icon', asset('assets/img/logo.png'))->sendNotificationToUser(
                $message,
                $userId,
                $url =  route('steps.' .  $this->participant->step, ['participant_token' => $this->participant->getRememberToken()]),
                $data = null,
                $buttons = null,
                $schedule = null,
                $heading

            );
        }
        $this->participant->remind_step = 1;
        $this->participant->save();

        $mail = new ParticipantRemind($this->participant);
        $recipient = new \stdClass();
        $recipient->email =  $this->participant->email;
        $recipient->name =  $this->participant->name;

        // Отправляем участнику письмо
        \Mail::to($recipient)->send($mail);
    }
}
