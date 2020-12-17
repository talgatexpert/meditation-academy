<?php

namespace App\Models;

use App\Models\Traits\FormattedDates;

class Blacklist extends \Eloquent
{

    use FormattedDates;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'blacklist';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
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
     * Проверяет указанный email на наличие в черном списке
     * Возвращает true, если он есть в черном списке и false в противном случае
     *
     * @param string $email
     * @return bool
     */
    public static function check(string $email): bool
    {
        return self::where('email', $email)->exists();
    }

}
