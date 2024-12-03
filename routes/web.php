<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VacancyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});


// JUNO CSS TEST PAGE
Route::get('/junotest', function () {
    return view('login.login-step-3');
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
