<?php

use App\Http\Controllers\KartingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

// Muestra el Login en pantalla
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');

// Procesamiento del Login
Route::post('/', [AuthController::class, 'login']);

// Cierre de Sesión
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protección del CRUD para que solo usuarios autenticados puedan acceder
Route::middleware('auth')->group(function () {
    Route::resource('kartings', KartingController::class);
});


Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);