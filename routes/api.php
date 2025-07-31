<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RecaptchaController;

Route::post('/verify', [RecaptchaController::class, 'verify'])
    ->name('recaptcha.verify');