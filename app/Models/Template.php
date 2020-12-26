<?php

namespace App\Models;

use App\Models\Traits\FormattedDates;
use App\Models\Traits\JsonEncode;
use Carbon\Carbon;
use Illuminate\Support\Str;

class Template extends \Eloquent
{

    use FormattedDates, JsonEncode;

    // Названия шаблонов писем
    public const PARTICIPANT_EMAIL_CONFIRMATION = 'participant_email_confirmation';
    public const PARTICIPANT_CURATOR_REPLIED = 'participant_curator_replied';
    public const PARTICIPANT_GRADUATE = 'participant_graduate';
    public const PARTICIPANT_REMIND_STEP = 'participant_remind_step_';


    public const PARTICIPANT_REMIND_STEP_4 = 'participant_remind_step_4';
    public const PARTICIPANT_REMIND_STEP_5 = 'participant_remind_step_5';
    public const PARTICIPANT_REMIND_STEP_6 = 'participant_remind_step_6';
    public const PARTICIPANT_REMIND_STEP_7 = 'participant_remind_step_7';




    // Список доступных названий шаблонов писем
    public const NAMES = [
        self::PARTICIPANT_EMAIL_CONFIRMATION => 'Запрос на подтверждение email участника',
        self::PARTICIPANT_CURATOR_REPLIED => 'Оповещение участника об ответе куратора',
        self::PARTICIPANT_GRADUATE => 'Спасибо за участие!',
        self::PARTICIPANT_REMIND_STEP_4 => 'Нужна помощь?',
        self::PARTICIPANT_REMIND_STEP_5 => 'Как проходят ваши «дни осознанности»?',
        self::PARTICIPANT_REMIND_STEP_6 => 'Возвращайтесь!',
        self::PARTICIPANT_REMIND_STEP_7 => 'Не сдавайтесь! Вы почти у цели.',


    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'subject',
        'sender',
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
    protected $casts = [
        'sender' => 'array',
    ];

    /**
     * Участник, привязанный к шаблону письма
     *
     * @var Participant
     */
    protected $participant = null;

    /**
     * Комментарий, привязанный к шаблону письма
     *
     * @var Comment
     */
    protected $comment = null;

    /**
     * Привязывает нового участника к шаблону письма
     *
     * @param Participant $participant
     * @return void
     */
    public function setParticipant($participant): void
    {
        $this->participant = $participant;
    }

    /**
     * Привязывает новый комментарий к шаблону письма
     *
     * @param Comment $comment
     * @return void
     */
    public function setComment(Comment $comment): void
    {
        $this->comment = $comment;
    }

    /**
     * Возвращает тему письма из шаблона с подстановкой значений в переменные
     *
     * @param bool $preview
     * @return string|null
     */
    public function getSubject(bool $preview = false): ?string
    {
        return $this->resolveVariables($this->subject, $preview);
    }

    /**
     * Возвращает тело письма из шаблона с подстановкой значений в переменные
     *
     * @param bool $preview
     * @return string|null
     */
    public function getBody(bool $preview = false): ?string
    {
        return $this->resolveVariables($this->body, $preview);
    }

    /**
     * Возвращает полное название шаблона письма
     *
     * @return string|null
     */
    public function getFullNameAttribute(): ?string
    {
        return \Arr::get(self::NAMES, $this->name);
    }

    /**
     * Возвращает email отправителя
     *
     * @return string
     */
    public function getSenderEmailAttribute(): string
    {
        return \Arr::get($this->sender, 'email');
    }

    /**
     * Возвращает имя отправителя
     *
     * @return string|null
     */
    public function getSenderNameAttribute(): ?string
    {
        return \Arr::get($this->sender, 'name');
    }

    /**
     * Возвращает отправителя в полном виде: имя <email>
     *
     * @return string
     */
    public function getSenderFullAttribute(): string
    {
        return $this->sender_name ? $this->sender_name . ' <' . $this->sender_email . '>' : $this->sender_email;
    }

    /**
     * Возвращает контент, в котором все поддерживаемые в шаблоне письма переменные заменены на соответствующие значения
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
     * Возвращает список поддерживаемых переменных в шаблонах писем
     *
     * @return array
     */
    public static function getVariables(): array
    {
        return [
            'STEP_URL' => [
                'name' => 'URL шага',
                'title' => 'Полный URL к шагу',
                'value' => function (Template $template) {

                    if (empty($template->participant->getRememberToken())){
                        $template->participant->setRememberToken(Str::random(60));
                        $template->participant->save();
                    }
                    if ($template->participant->step !==0)
                        return route('steps.' .  $template->participant->step, ['participant_token' => $template->participant->getRememberToken()]);
                },
                'preview_value' => function (Template $template) {
                    return '#';
                },

            ],


            'ASSETS_URL' => [
                'name' => 'URL картинок',
                'title' => 'Полный URL к картинкам для писем',
                'value' => function (Template $template) {
                    return url('assets/emails');
                },
            ],
            'COMMENT_STEP' => [
                'name' => 'Шаг комментария',
                'title' => 'Номер шага, на котором находится комментарий',
                'value' => function (Template $template) {
                    return $template->comment ? $template->comment->step : '';
                },
                'preview_value' => function (Template $template) {
                    return \Arr::random([1, 2, 3, 4, 5, 6, 7]);
                },
            ],
            'COMMENT_URL' => [
                'name' => 'URL комментария',
                'title' => 'Полный URL к комментарию на странице задания',
                'value' => function (Template $template) {
                  if (empty($template->participant->getRememberToken())){
                      $template->participant->setRememberToken(Str::random(60));
                      $template->participant->save();
                    }
                    return $template->comment ? route('steps.' . $template->comment->step, ['participant_token' => $template->participant->getRememberToken()]) . '#comment-' . $template->comment->id : '#';
                },
                'preview_value' => function (Template $template) {
                    return '#';
                },
            ],
            'COPYRIGHT' => [
                'name' => 'Авторские права',
                'title' => 'Текст с авторскими правами',
                'value' => function (Template $template) {
                    return view('includes.copyright')->render();
                },
            ],
            'EMAIL_VERIFICATION_URL' => [
                'name' => 'URL подтверждения email',
                'title' => 'Полный URL к странице подтверждения email участника',
                'value' => function (Template $template) {
                    return $template->participant ? route('verify', [$template->participant, sha1($template->participant->email)]) : '#';
                },
                'preview_value' => function (Template $template) {
                    return '#';
                },
            ],
            'PARTICIPANT_NAME' => [
                'name' => 'Имя участника',
                'title' => 'Имя участника, которому будет отправлено письмо',
                'value' => function (Template $template) {
                    return $template->participant ? $template->participant->name : '';
                },
                'preview_value' => function (Template $template) {
                    return \Arr::random(['Андрей', 'Анна', 'Илья']);
                },
            ],
            'CERTIFICATE' => [
                'name' => 'Имя участника',
                'title' => 'Имя участника, которому будет отправлено письмо',
                'value' => function (Template $template) {
                    return $template->participant ? $template->participant->certificate : '';
                },
                'preview_value' => function (Template $template) {
                    return '#';
                },
            ],
            'EXPIRATION_DATE' => [
                'name' => 'Дата окончания',
                'title' => 'Дата окончания сертификата',
                'value' => function (Template $template) {
                    if ($template->participant && $template->participant->certificate_expiration_at) {
                        return Carbon::createFromFormat('Y-m-d H:i:s', $template->participant->certificate_expiration_at)->format('d.m.Y');
                    }
                },

                'preview_value' => function (Template $template) {
                    return '#';
                },
            ],
        ];
    }

}
