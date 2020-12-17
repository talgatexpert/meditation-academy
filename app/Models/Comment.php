<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;

class  Comment extends \Eloquent
{


    public const PUBLISH_COMMENT = 1;
    public const UN_PUBLISH = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'parent_id',
        'participant_id',
        'curator_id',
        'step',
        'body',
        'status',
        'publish'
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
        'parent_id' => 'integer',
        'participant_id' => 'integer',
        'curator_id' => 'integer',
        'step' => 'integer',
    ];

    /**
     * Возвращает комментарии, привязанные к отчету
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
    public function countChildren($node = null)
    {
        $query = $this->children();
        if (!empty($node)) {
            $query = $query->where('node', $node);
        }

        $count = 0;
        foreach ($query->get() as $child) {
            // Plus 1 to count the direct child
            $count += $child->countChildren() + 1;
        }
        return $count;
    }
    public function children()
    {
        return $this->comments();
    }


    /**
     * Возвращает участника, к которому привязан комментарий
     *
     * @return Participant
     */
    public function participant()
    {
        return $this->belongsTo(Participant::class);
    }

    /**
     * Возвращает куратора, к которому привязан комментарий
     *
     * @return User
     */
    public function curator()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Возвращает активные лайки, привязанные к комментарию
     *
     * @return CommentLike[]
     */
    public function likes()
    {
        return $this->hasMany(CommentLike::class)->active();
    }

    /**
     * Возвращает true, если комментарий может быть отредактирован или удален владельцем
     *
     * @return bool
     */
    public function canBeEditedByOwner(): bool
    {
        $guard = \Auth::guard('participant');
        return $guard->check() && $this->participant_id == $guard->id() && $this->created_at->diffInSeconds(now()) < 86400 && !$this->reportHasComments();
    }

    /**
     * Возвращает true, если комментарий был лайкнут текущим авторизованным участником или гостем
     *
     * @return bool
     */
    public function isLiked(): bool
    {
        if (($guard = \Auth::guard('participant'))->check()) {
            return $this->likes->contains('participant_id', $guard->id());
        } else {
            return $this->likes->contains('guest_uuid', session('guest_uuid'));
        }
    }

    /**
     * Возвращает true, если комментарий является отчетом (комментарий 1-го уровня)
     *
     * @return bool
     */
    public function isReport(): bool
    {
        return is_null($this->parent_id);
    }


    // Возвращает true если комментарий куратора

    public function hasCurator(): bool
    {
        return !is_null($this->curator_id);
    }

    /**
     * Возвращает true, в отчете есть комментарии
     *
     * @return bool
     */
    public function reportHasComments(): bool
    {
        return $this->isReport() && $this->comments->isNotEmpty();
    }

    /**
     * Возвращает true, если в отчете есть ответ куратора.
     * При этом можно пропустить некоторые комментарии, например только что созданный ответ куратора
     *
     * @param array $ignoreIds
     * @return bool
     */
    public function reportHasCuratorReply(array $ignoreIds = []): bool
    {
        return $this->isReport() && $this->comments->whereNotIn('id', $ignoreIds)->whereNotNull('curator_id')->count() > 0;
    }

    /**
     * Возвращает название страницы, соответствующей номеру шага
     *
     * @return string
     */
    public function getStepPageAttribute(): string
    {
        switch ($this->step) {
            case 1:
                return 'step-1-meditation-posture';
            case 2:
                return 'step-2-meditation-hands';
            case 3:
                return 'step-3-dynamic-meditation';
            case 4:
                return 'step-4-breathing';
            case 5:
                return 'step-5-happyday';
            case 6:
                return 'step-6-counting';
            case 7:
                return 'step-7-gratitude';
        }
        return '';
    }

    /**
     * Возвращает только те комментарии, которые являются отчетами (комментарии 1-го уровня)
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeReports($query)
    {
        return $query->whereNull('parent_id');
    }

    /**
     * Возвращает только те комментарии, которые относятся к указанному шагу
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
     * Возвращает кол-во отчетов на указанном шаге
     *
     * @param int $step
     * @return int
     */
    public static function reportsCountAtStep(int $step): int
    {
        return self::reports()->ofStep($step)->count();
    }
    public function setPublish(){
        $this->publish = self::PUBLISH_COMMENT;
        $this->save();
    }
    public function banReview(){
        $this->publish = self::UN_PUBLISH;
        $this->save();
    }
    public function scopeHasReviews($query)
    {
        $query->where('comments.status', 1)->where('comments.publish', 1)->where('comments.step', 7)->whereNull('comments.parent_id')->has('participant')->with('participant');
    }



}
