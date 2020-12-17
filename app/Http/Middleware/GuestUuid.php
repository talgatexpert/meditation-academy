<?php

namespace App\Http\Middleware;

use Closure;

class GuestUuid
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
        // При каждом запросе гостя, записываем в сессию гостевой UUID, если там его еще нет
        if (\Auth::guard('participant')->guest()) {
            if (!$request->session()->has('guest_uuid')) {
                $request->session()->put('guest_uuid', \Str::uuid()->toString());
            }
        }
        return $next($request);
    }

}
