<?php

namespace App\Models;

use App\Models\Traits\FormattedDates;
use App\Notifications\Admin\ResetPassword as ResetPasswordNotification;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

    use FormattedDates, Notifiable;

    // Роли пользователей
    public const ROLE_ADMIN = 1; // Админ/Супер админ
    public const ROLE_MANAGER = 2; // Менеджер
    public const ROLE_CURATOR = 3; // Куратор
    public const ROLE_GUEST = 4; // Гость из Академии медитации
    public const ROLE_ADMINISTRATOR = 5; // Администратор


    // Список ролей, доступных пользователю
    public const ROLES = [
        self::ROLE_ADMIN => 'Супер-админ',
        self::ROLE_MANAGER => 'Менеджер',
        self::ROLE_CURATOR => 'Куратор',
        self::ROLE_GUEST => 'Гость из Академии медитации',
        self::ROLE_ADMINISTRATOR => 'Администратор'
    ];

    // Способности ролей пользователей
    public const ABILITY_ADMIN = 'admin';
    public const ABILITY_MANAGER = 'manager';
    public const ABILITY_CURATOR = 'curator';
    public const ABILITY_GUEST = 'guest';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
        'active',
        'role',
        'name'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'active' => 'boolean',
        'role' => 'integer'
    ];

    /**
     * Send the password reset notification.
     *
     * @param string $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    /**
     * Возвращает участников, привязанных к куратору
     *
     * @return Participant[]
     */
    public function participants()
    {
        return $this->hasMany(Participant::class, 'curator_id')->withTrashed();
    }

    /**
     * Возвращает true, если пользователь включен и доступен
     *
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * Возвращает true, если пользователь является супер-админом
     *
     * @return bool
     */
    public function isSuperAdmin(): bool
    {
        return in_array($this->id, [1, 2]);
    }

    /**
     * Возвращает true, если пользователь является админом
     *
     * @return bool
     */
    public function isAdmin(): bool
    {
        return $this->role === self::ROLE_ADMIN || self::ROLE_ADMINISTRATOR;
    }

    /**
     * Возвращает true, если пользователь является менеджером
     *
     * @return bool
     */
    public function isManager(): bool
    {
        return $this->role === self::ROLE_MANAGER;
    }

    /**
     * Возвращает true, если пользователь является куратором
     *
     * @return bool
     */
    public function isCurator(): bool
    {
        return $this->role === self::ROLE_CURATOR;
    }

    /**
     * Возвращает true, если пользователь является гостем из Академии медитации
     *
     * @return bool
     */
    /**
     * Возвращает количество кураторов
     *
     */
    public function scopeCurators($query)
    {
        $query->where('role', self::ROLE_CURATOR);
    }

    public function isGuest(): bool
    {
        return $this->role === self::ROLE_GUEST;
    }

    /**
     * Возвращает аватар куратора, основанный на его email
     *
     * @return string|null
     */
    public function getAvatarAttribute(): ?string
    {
        if ($this->isCurator()) {
            if (app()->environment('local')) {
                // В локальной среде, аватар куратора делаем случайным, не завязанным на email
                return '/assets/img/' . \Arr::random(['Zoe_', 'Shura_', 'Tanya_', 'Kostik_', 'Serg_']) . (\Agent::isMobile() ? '300' : '600') . '.png';
            } else {
                switch ($this->email) {
                    // Зои
                    case 'lumik@ukr.net':
                        return '/assets/img/Zoe_' . (\Agent::isMobile() ? '300' : '600') . '.png';
                    // Шура
                    case 'diablik@bk.ru':
                        return '/assets/img/Shura_' . (\Agent::isMobile() ? '300' : '600') . '.png';
                    // Таня
                    case 'surianiusha@mail.ru':
                        return '/assets/img/Tanya_' . (\Agent::isMobile() ? '300' : '600') . '.png';
                    // Костя
                    case 'alekseenko.arthur@gmail.com':
                        return '/assets/img/Kostik_' . (\Agent::isMobile() ? '300' : '600') . '.png';
                    // Сергей
                    case 'buklovsergej99@gmail.com':
                        return '/assets/img/Serg_' . (\Agent::isMobile() ? '300' : '600') . '.png';
                }
            }
        }

        return null;
    }

    /**
     * Возвращает текстовое название роли пользователя
     *
     * @return string|null
     */
    public function getRoleNameAttribute(): ?string
    {
        return \Arr::get(self::ROLES, $this->role);
    }

    /**
     * Хеширует пароль пользователя (только если он указан)
     *
     * @param string $value
     * @return void
     */
    public function setPasswordAttribute($value)
    {
        if (!is_null($value)) {
            $this->attributes['password'] = \bcrypt($value);
        }
    }

    /**
     * Возвращает только тех пользователей, которые включены и доступны
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    /**
     * Возвращает только тех пользователей, которые являются администраторами
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeAdmin($query)
    {
        return $query->where('role', self::ROLE_ADMIN);
    }

    public function scopeAdministrator($query)
    {
        return $query->where('role', self::ROLE_ADMINISTRATOR);
    }

    /**
     * Возвращает только тех пользователей, которые являются менеджерами
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeManager($query)
    {
        return $query->where('role', self::ROLE_MANAGER);
    }

    /**
     * Возвращает только тех пользователей, которые являются кураторами
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeCurator($query)
    {
        return $query->where('role', self::ROLE_CURATOR);
    }

    // Назначенный куртор
    public function scopeAppointedCurator($query, $curator_id)
    {
        if ($curator_id)
            return $query->where('role', self::ROLE_CURATOR)->where('id', $curator_id);
    }

}
