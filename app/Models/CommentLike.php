<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;

class CommentLike extends \Eloquent
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'comment_id',
        'participant_id',
        'guest_uuid',
        'active',
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
        'comment_id' => 'integer',
        'participant_id' => 'integer',
        'active' => 'boolean',
    ];

    /**
     * Возвращает только активные лайки
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeActive($query)
    {
        return $query->where('active', true);
    }

}
