<?php

namespace App\Http;

use Illuminate\Http\Request;

class Authenticate
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            // не аутентифицированных пользователей отправляем
            // на страницу формы входа в личный кабинет
            return route('login');
        }
    }
}
