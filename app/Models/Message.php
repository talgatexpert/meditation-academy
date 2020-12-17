<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;

class Message extends \Eloquent
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'participant_id',
        'title',
        'body',
        'new',
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
        'participant_id' => 'integer',
        'new' => 'boolean',
    ];

    /**
     * Возвращает участника, к которому привязано сообщение
     *
     * @return Participant
     */
    public function participant()
    {
        return $this->belongsTo(Participant::class);
    }

    /**
     * Помечает сообщение как прочитанное
     *
     * @param bool $autoSave
     * @return void
     */
    public function read(bool $autoSave = true): void
    {
        $this->new = false;

        if ($autoSave) {
            $this->save();
        }
    }

    /**
     * Возвращает true, если сообщение новое (непрочитанное)
     *
     * @return bool
     */
    public function isNew(): bool
    {
        return $this->new;
    }

    /**
     * Возвращает только новые сообщения
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeNew($query)
    {
        return $query->where('new', 1);
    }

}
