<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::middleware(['web'])->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
});