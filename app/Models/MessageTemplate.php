<?php

namespace App\Models;

use App\Models\Traits\FormattedDates;
use App\Models\Traits\JsonEncode;
use Carbon\Carbon;

class MessageTemplate extends \Eloquent
{

    use FormattedDates, JsonEncode;

    // Названия шаблонов сообщений
    public const WELCOME = 'welcome';
    public const STEP2 = 'step2';
    public const STEP3 = 'step3';
    public const STEP4 = 'step4';
    public const STEP5 = 'step5';
    public const STEP6 = 'step6';
    public const STEP7 = 'step7';
    public const CERTIFICATE = 'certificate';


    // Список доступных названий шаблонов сообщений
    public const NAMES = [
        self::WELCOME => 'Добро пожаловать!',
        self::STEP2 => 'Шаг 2. Медитация на ладонях',
        self::STEP3 => 'Шаг 3. «Динамическая» медитация',
        self::STEP4 => 'Шаг 4. «Поплавок»',
        self::STEP5 => 'Шаг 5. День осознанности',
        self::STEP6 => 'Шаг 6. Счет и внутренняя дисциплина',
        self::STEP7 => 'Шаг 7. Осознанность и благодарность',
        self::CERTIFICATE => 'Поздравляем ваш сертификат',

    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'title',
        'body',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * Участник, привязанный к шаблону сообщения
     *
     * @var Participant
     */
    protected $participant = null;

    /**
     * Привязывает нового участника к шаблону сообщения
     *
     * @param Participant $participant
     * @return void
     */
    public function setParticipant($participant): void
    {
        $this->participant = $participant;
    }

    /**
     * Возвращает заголовок сообщения из шаблона с подстановкой значений в переменные
     *
     * @param bool $preview
     * @return string|null
     */
    public function getTitle(bool $preview = false): ?string
    {
        return $this->resolveVariables($this->title, $preview);
    }

    /**
     * Возвращает тело сообщения из шаблона с подстановкой значений в переменные
     *
     * @param bool $preview
     * @return string|null
     */
    public function getBody(bool $preview = false): ?string
    {
        return $this->resolveVariables($this->body, $preview);
    }

    /**
     * Возвращает полное название шаблона сообщения
     *
     * @return string|null
     */
    public function getFullNameAttribute(): ?string
    {
        return \Arr::get(self::NAMES, $this->name);
    }

    /**
     * Возвращает контент, в котором все поддерживаемые в шаблоне сообщения переменные заменены на соответствующие значения
     *
     * @param string|null $content
     * @param bool $preview
     * @return string|null
     */
    public function resolveVariables(?string $content, bool $preview = false): ?string
    {
        if ($content) {
            foreach (self::getVariables() as $var => $data) {
                $content = str_replace('{' . $var . '}', $data[$preview && isset($data['preview_value']) ? 'preview_value' : 'value']($this), $content);
            }
        }
        return $content;
    }

    /**
     * Возвращает список поддерживаемых переменных в шаблонах сообщений
     *
     * @return array
     */
    public static function getVariables(): array
    {
        return [
            'ASSETS_URL' => [
                'name' => 'URL картинок',
                'title' => 'Полный URL к картинкам для сообщений',
                'value' => function (MessageTemplate $template) {
                    return url('assets/messages');
                },
            ],
            'PARTICIPANT_NAME' => [
                'name' => 'Имя участника',
                'title' => 'Имя участника, которому будет отправлено сообщение',
                'value' => function (MessageTemplate $template) {
                    return $template->participant ? $template->participant->name : '';
                },
                'preview_value' => function (MessageTemplate $template) {
                    return \Arr::random(['Андрей', 'Анна', 'Илья']);
                },
            ],
            'CERTIFICATE' => [
                'name' => 'Сертификат',
                'title' => 'Сертификат участника',
                'value' => function (MessageTemplate $template) {
                    return $template->participant ? $template->participant->certificate : '';
                },
                'preview_value' => function (MessageTemplate $template) {
                    return \Arr::random(['Андрей', 'Анна', 'Илья']);
                },

            ],

            'EXPIRATION_DATE' => [
                'name' => 'Дата окончания',
                'title' => 'Дата окончания сертификата',
                'value' => function (MessageTemplate $template) {
                    if ($template->participant && $template->participant->certificate_expiration_at) {
                        return Carbon::createFromFormat('Y-m-d H:i:s', $template->participant->certificate_expiration_at)->format('d.m.Y');
                    }
                },
                'preview_value' => function (MessageTemplate $template) {
                    return \Arr::random(['Андрей', 'Анна', 'Илья']);
                },
            ]

        ];
    }

}
