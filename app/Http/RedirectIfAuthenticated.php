<?php

namespace App\Http;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
 * Handle an incoming request.
 *
 * @param Request $request
 * @param Closure $next
 * @param null|string $guard
 *
 * @return mixed
 */
    public function handle(Request $request, Closure $next, string $guard = null): mixed
    {
        if (Auth::guard($guard)->check()) {
            // аутентифицированных пользователей отправляем
            // на главную страницу личного кабинета
            return redirect()->route('user.index');
        }

        return $next($request);
    }
}
