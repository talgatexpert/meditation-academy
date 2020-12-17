<?php

namespace App\Http\Middleware;

use Closure;

class LastActivity
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
        // При каждом запросе авторизованного участника обновляем его время последней активности
        $guard = \Auth::guard('participant');
        if ($guard->check()) {
            $guard->user()->withoutTimestamps()->update([
                'last_activity_at' => now(),
            ]);
        }
        return $next($request);
    }

}
