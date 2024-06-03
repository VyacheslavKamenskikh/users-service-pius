<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SocialiteController;
Route::controller(AuthController::class)->group(function () {
    Route::post('/', 'register');
    Route::post('/login', 'login');
});

Route::post('/login/callback', [SocialiteController::class, 'handleProviderCallback']);
