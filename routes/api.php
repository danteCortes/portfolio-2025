<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\RecaptchaController;

Route::post('/verify', [RecaptchaController::class, 'verify'])
    ->name('recaptcha.verify');

Route::post('/contact/shipped', [ContactController::class, 'shipped'])
    ->name('contact.shipped');