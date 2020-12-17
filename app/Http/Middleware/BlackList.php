<?php

namespace App\Http\Middleware;

use Closure;

class BlackList
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
        // Если авторизованный участник есть в черном списке, принудительно выходим из системы
        $guard = \Auth::guard('participant');
        if ($guard->check() && \App\Models\Blacklist::check($guard->user()->email)) {
            $guard->logout();
            if ($request->expectsJson()) {
                return response()->json([
                    'status' => 'OK',
                    'redirect' => route('home'),
                ]);
            }
            return redirect()->route('home');
        }
        return $next($request);
    }

}
