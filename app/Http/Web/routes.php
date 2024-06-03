<?php

use App\Http\Web\Controllers\HealthCheck;
use App\Http\Web\Controllers\OasController;
use Illuminate\Support\Facades\Route;

Route::get('health', HealthCheck::class);

Route::get('/', [OasController::class, 'list']);

Route::middleware('guest')->namespace('\App\Http\Controllers')->group(function () {
    Route::get('/login', function () {
        return view('login');
    });

    Route::post(
        '/login',
        'AuthController@postSignin'
    )->name('login');
});

Route::post('/register', function () {
    return view('reg');
});
