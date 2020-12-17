<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Notifications\Notifiable;

class Subscription extends \Eloquent
{
    use Notifiable;
    protected $fillable =['email', 'active', 'token'];

    public function getCreatedAtAttribute(string $date): string
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d.m.Y');
    }

}
