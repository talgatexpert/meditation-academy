<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;

class RedirectIfAuthenticated
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
        if (\Auth::guard($guard)->check()) {
            if ($request->expectsJson()) {
                return response()->json([
                    'status' => 'OK',
                    'redirect' => route('home'),
                ]);
            }
            return redirect(RouteServiceProvider::HOME);
        }
        return $next($request);
    }

}
