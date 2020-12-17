<?php

namespace App\Models;

use App\Events\ParticipantGraduated;
use App\Events\ParticipantNextStep;
use App\Events\ParticipantVerified;
use App\Models\Traits\FormattedDates;
use App\Models\Traits\JsonEncode;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class Participant extends Authenticatable
{

    use FormattedDates, JsonEncode, Notifiable, SoftDeletes;

    // Уровни ожидания назначения куратора
    public const CURATOR_PENDING_LEVEL_NONE = 0; // Пусто
    public const CURATOR_PENDING_LEVEL_MANAGER = 1; // Менеджер
    public const CURATOR_PENDING_LEVEL_ADMIN = 2; // Админ
    public const IS_GRADUATE = 1; // Является выпускником
    public const IS_NOT_GRADUATE = 0; // Не является выпускником
    public const STATUS_COMMENT = 0;
    public const STATUS_FEEDBACK = 1;
    // Максимальный шаг, до которого может дойти участник
    public const MAX_STEP = 7;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'avatar',
        'step',
        'step_assigned_at',
        'step_reported_at',
        'curator_id',
        'curator_assigned_at',
        'curator_pending_level',
        'extra',
        'attempts',
        'verified_at',
        'last_activity_at',
        'graduate',
        'certificate',
        'certificate_expiration_at',
        'comment_visible',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['remember_token'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'step' => 'integer',
        'curator_id' => 'integer',
        'curator_pending_level' => 'integer',
        'extra' => 'array',
        'attempts' => 'integer',
        'comment_visible' => 'boolean'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'step_assigned_at',
        'step_reported_at',
        'curator_assigned_at',
        'verified_at',
        'last_activity_at',
        'graduated_at',
        'certificate_expiration_at',
    ];

    /**
     * Возвращает куратора, к которому привязан участник
     *
     * @return User
     */
    public function curator()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Возвращает сообщения, привязанные к участнику
     *
     * @return Message[]
     */
    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    /**
     * Возвращает комментарии, привязанные к участнику
     *
     * @return Comment[]
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Подтверждает участника
     *
     * @param bool $autoSave
     * @return void
     */
    public function verify(bool $autoSave = true): void
    {
        // Устанавливаем участнику первый шаг и помечаем его как верифицированного
        $this->step = 1;
        $this->step_assigned_at = now();
        $this->verified_at = now();

        if ($autoSave) {
            $this->save();
        }

        // Участник подтвержден
        event(new ParticipantVerified($this));
    }

    /**
     * Переводит участника на след. шаг после публикации комментария от куратора
     *
     * @param Comment $comment
     * @param bool $autoSave
     * @return void
     */
    public function nextStep(Comment $comment, bool $autoSave = true): void
    {

        if ($this->step < self::MAX_STEP) {
            $this->step++;
            $this->step_assigned_at = now();
            $this->step_reported_at = null;
            $this->curator_pending_level = self::CURATOR_PENDING_LEVEL_NONE;
            if ($autoSave) {
                $this->save();
            }
            // Участнику доступен след. шаг
            event(new ParticipantNextStep($this, $comment));
        }
        if ($comment->step == self::MAX_STEP && $this->graduate == self::IS_NOT_GRADUATE){
            $this->graduate = self::IS_GRADUATE;
            $this->certificate = mb_strtoupper(Str::random(10));
            $now = Carbon::now();
            $this->graduated_at = $now;
            $this->certificate_expiration_at = $now->addYear();
            $this->save();

            event(new ParticipantGraduated($this, $comment));
        }
    }

    /**
     * Возвращает true, если участнику доступен указанный шаг
     *
     * @param int $step
     * @return bool
     */
    public function isStepAvailable(int $step): bool
    {
        return $step > 0 && $this->step >= $step;
    }

    /**
     * Возвращает true, если участник уже отчитался на указанном шаге
     *
     * @param int $step
     * @return bool
     */
    public function reportedAtStep(int $step): bool
    {
        return $this->comments()->reports()->ofStep($step)->count() > 0;
    }

    /**
     * Возвращает true, если email участника был подтвержден
     *
     * @return bool
     */
    public function isVerified(): bool
    {
        return !is_null($this->verified_at);
    }

    /**
     * Возвращает true, если участник еще не голосовал в указанном опросе
     *
     * @param string $name
     * @return bool
     */
    public function isNotVotedAtPoll(string $name): bool
    {
        return \DB::table('polls')->where('name', $name)->where('participant_id', $this->id)->doesntExist();
    }

    /**
     * Возвращает кол-во новых сообщений участника
     *
     * @return int
     */
    public function getNewMessages(): int
    {
        return $this->messages()->new()->count();
    }

    /**
     * Возвращает иконку соц. сети, через которую был зарегистрирован участник
     *
     * @return string
     */
    public function getSocialIcon(): string
    {
        return '<i class="fa fa-at" title="Email"></i>';
    }

    /**
     * Возвращает разницу между текущим временем и временем предоставления доступа к текущему шагу в формате: д ч м
     *
     * @return string|null
     */
    public function getCurrentStepTime(): ?string
    {
        return $this->step_assigned_at ? now()->diff($this->step_assigned_at, true)->format('%dд %hч %iм') : null;
    }

    /**
     * Возвращает разницу между текущим временем и временем написания отчета на текущем шаге в формате: д ч м
     *
     * @return string|null
     */
    public function getCurrentStepReportTime(): ?string
    {

        return $this->step_reported_at ? now()->diff($this->step_reported_at, true)->format('%dд %hч %iм') : null;
    }

    /**
     * Возвращает дату (дд.мм.гггг) назначения куратора
     *
     * @return string|null
     */
    public function getCuratorAssignmentDate(): ?string
    {
        return $this->curator_assigned_at ? Carbon::createFromFormat('Y-m-d H:i:s', $this->curator_assigned_at)->format('d.m.Y') : null;
    }
    /*
     *  Возвращаем дату (дд.мм.гггг)
     */

    public function getGraduatedDate(): ?string
    {
        return $this->graduated_at ? Carbon::createFromFormat('Y-m-d H:i:s', $this->graduated_at)->format('d.m.Y') : null;
    }

    /**
     * Возвращает дату (дд.мм.гггг) подтверждения email'а
     *
     * @return string|null
     */
    public function getVerificationDate(): ?string
    {
        return $this->verified_at ? Carbon::createFromFormat('Y-m-d H:i:s', $this->verified_at)->format('d.m.Y') : null;
    }

    /**
     * Возвращает дату (дд.мм.гггг) и время (чч:мм) подтверждения email'а
     *
     * @return string|null
     */
    public function getVerificationDateTime(): ?string
    {
        return $this->verified_at ? Carbon::createFromFormat('Y-m-d H:i:s', $this->verified_at)->format('d.m.Y H:i') : null;
    }

    /**
     * Возвращает только тех участников, которые находятся на указанном шаге
     *
     * @param Builder $query
     * @param int $step
     * @return Builder
     */
    public function scopeOfStep($query, int $step)
    {
        return $query->where('step', $step);
    }

    /**
     * Возвращает только тех участников, у которых есть куратор
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeHasCurator($query)
    {
        return $query->whereNotNull('curator_id');
    }

    /**
     * Возвращает только тех участников, которые были подтверждены
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeVerified($query)
    {
        return $query->whereNotNull('verified_at');
    }

    /**
     * Временно отключает обновление временных меток у записи
     *
     * @return $this
     */
    public function scopeWithoutTimestamps()
    {
        $this->timestamps = false;
        return $this;
    }

    /*
     * Возвращает участника который еще не выпущен
     */

    public static function isNotGraduate(){
        return static::where('graduate', '=', self::IS_NOT_GRADUATE);
    }

    /*
     * Возвращает участника который выпущен
     */

    public static function isGraduate(){
        return static::where('graduate', '=', self::IS_GRADUATE);
    }
    /*
     * Выпускает участника
     * Выдается сертификат
     * Устанавливается дата выпуска
     */
    public function setGraduate(){
        $this->graduate = self::IS_GRADUATE;
        $this->certificate = mb_strtoupper(Str::random(10));
        $now = Carbon::now();
        $this->graduated_at = $now;
        $this->certificate_expiration_at = $now->addYear();
        $this->save();
    }
    /*
     * Возвращает только выпущенных участников
     */

    public function scopeOnlyGraduate($query)
    {
        $query->where('participants.graduate', self::IS_GRADUATE)->with('curator')->onlyTrashed()->orWhere(function ($q){
            $q->withoutTrashed()->where('participants.graduate', self::IS_GRADUATE);
        });
    }

    /*
     * Возвращает только отзывы участников которые прошли 7 шагов
     */

    public function scopeHasReviews($query)
    {
        $query->whereHas('comments', function ($q){
            $q->where('comments.status', 1)->where('comments.publish', 1)->where('comments.step', self::MAX_STEP)->whereNull('comments.parent_id');
        });
    }




}
