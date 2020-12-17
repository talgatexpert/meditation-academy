<?php

namespace App\Http\Middleware\Admin;

use Closure;

class CheckUser
{

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string|null $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // Если авторизованный пользователь был отключен, принудительно выходим из системы
        if (\Auth::check() && !\Auth::user()->isActive()) {
            \Auth::logout();
            return redirect()->route('admin.login');
        }

        return $next($request);
    }

}
