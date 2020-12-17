<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{

    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Регистрируем все способности ролей пользователей
        \Gate::define(User::ABILITY_ADMIN, function (User $user) {
            return $user->isSuperAdmin() || $user->isAdmin();
        });
        \Gate::define(User::ABILITY_MANAGER, function (User $user) {
            return $user->isSuperAdmin() || $user->isManager() || $user->isAdmin();
        });
        \Gate::define(User::ABILITY_CURATOR, function (User $user) {
            return $user->isSuperAdmin() || $user->isCurator() || $user->isAdmin();
        });
        \Gate::define(User::ABILITY_GUEST, function (User $user) {
            return $user->isSuperAdmin() || $user->isGuest() || $user->isAdmin();
        });
    }

}
