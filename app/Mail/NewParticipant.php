<?php

namespace App\Mail;

use App\Models\Participant;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewParticipant extends Mailable
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
        // Формируем URL для кнопки
        $actionUrl = route('admin.participants.index', ['modal' => route('admin.participants.edit', $this->participant)]);

        // Формируем статистику кураторов
        $outroLines = [];
        $curators = User::active()->curator()->withCount(['participants' => function (Builder $query) {
            $query->hasCurator()->verified()->withoutTrashed();
        }])->get();
        if ($curators->count()) {
            $outroLines[] = 'Статистика кураторов:';
            foreach ($curators as $curator) {
                $outroLines[] = $curator->name . ' — ' . $curator->participants_count;
            }
        }

        return $this
            ->subject('Зарегистрировался новый участник "' . $this->participant->name . '"')
            ->markdown('vendor.notifications.email', [
                'level' => 'default',
                'greeting' => 'Зарегистрировался новый участник!',
                'introLines' => [
                    'Имя: ' . $this->participant->name,
                    'Email: ' . $this->participant->email,
                    'Подтвержден: ' . $this->participant->getVerificationDateTime(),
                ],
                'actionText' => 'Стать куратором',
                'actionUrl' => $actionUrl,
                'displayableActionUrl' => $actionUrl,
                'outroLines' => $outroLines,
                'salutation' => '',
            ]);
    }

}
