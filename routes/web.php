<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\Auth\RegisterController;
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::middleware(['web'])->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
});

// Ruta para mostrar el formulario de registro
Route::get('register', [RegisterController::class, 'showRegisterForm'])->name('register');

// Ruta para manejar el registro
Route::post('register', [RegisterController::class, 'register']);