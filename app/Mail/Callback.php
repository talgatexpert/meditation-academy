<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Callback extends Mailable
{

    use Queueable, SerializesModels;

    /**
     * Данные из формы заказа обратного звонка
     *
     * @var array
     */
    public $formData;

    /**
     * Create a new message instance.
     *
     * @param array $formData
     */
    public function __construct(array $formData)
    {
        $this->formData = $formData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Заявка на обратный звонок ' . config('app.name'))
            ->markdown('vendor.notifications.email', [
                'level' => 'default',
                'greeting' => 'Новая заявка на обратный звонок!',
                'introLines' => [
                    'Имя: ' . \Arr::get($this->formData, 'name'),
                    'Компания: ' . \Arr::get($this->formData, 'company'),
                    'Телефон: ' . \Arr::get($this->formData, 'tel'),
                    'E-mail: ' . \Arr::get($this->formData, 'email'),
                ],
                'outroLines' => [],
                'salutation' => '',
            ]);
    }

}
