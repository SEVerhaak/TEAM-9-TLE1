<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VacancyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
})->name('home');

// login routes and web

Route::get('/register/step-1', [RegisteredUserController::class, 'step1'])->name('register.step1');
Route::get('/register/step-2', [RegisteredUserController::class, 'step2'])->name('register.step2');
Route::get('/register/step-3', [RegisteredUserController::class, 'step3'])->name('register.step3');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');


// JUNO CSS TEST PAGE
Route::get('/junotest', function () {
    return view('login.login-step-1');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/dashboard', [VacancyController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::resource('open_vacancies', VacancyController::class)->names('open_vacancies');
Route::post('/open_vacancies/{vacancy}/apply', [VacancyController::class, 'vacancyApplicationHandler'])
    ->name('open_vacancies.vacancyApplicationHandler');

require __DIR__.'/auth.php';
