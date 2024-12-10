<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VacancyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
})->name('home');

Route::get('/test', function () {
    return view('login.registration-confirmed');
});

// login routes and web
Route::get('register/step1', [RegisteredUserController::class, 'step1'])->name('register.step1');
Route::post('register/step1', [RegisteredUserController::class, 'storeStep1'])->name('register.storeStep1');

Route::get('/register/step2', [RegisteredUserController::class, 'step2'])->name('register.step2');
Route::post('/register/step2', [RegisteredUserController::class, 'storeStep2'])->name('register.storeStep2');

Route::get('/register/step3', [RegisteredUserController::class, 'step3'])->name('register.step3');
Route::post('/register/storeStep3', [RegisteredUserController::class, 'storeStep3'])->name('register.storeStep3');

Route::post('/register/store', [RegisteredUserController::class, 'store'])->name('register.store');

Route::get('/register/success', function () {
    return view('login.registration-confirmed');
})->name('register.success');
// JUNO CSS TEST PAGE
Route::get('/junotest', function () {
    return view('login.login-step-1');
});

Route::get('/vacature-selectie', function () {
    return view('vacancy-selection-page');
})->name('vacancy-select');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', [VacancyController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/registrations_data', [VacancyController::class, 'registrationData'])->middleware(['auth', 'verified'])->name('registrations_data');
Route::get('/accepted_registrations',[VacancyController::class, 'acceptedRegistrations'] )->middleware(['auth', 'verified'])->name('accepted_registrations');
Route::get('/pending_registrations',[VacancyController::class, 'pendingRegistrations'] )->middleware(['auth', 'verified'])->name('pending_registrations');
Route::get('/denied_registrations',[VacancyController::class, 'deniedRegistrations'] )->middleware(['auth', 'verified'])->name('denied_registrations');
Route::get('/applied_vacancy/{vacancy}', [VacancyController::class, 'showApplication'])->middleware(['auth', 'verified'])->name('application.show');


Route::resource('open_vacancies', VacancyController::class);
Route::post('/open_vacancies/{vacancy}/apply', [VacancyController::class, 'vacancyApplicationHandler'])
    ->name('open_vacancies.vacancyApplicationHandler');

require __DIR__.'/auth.php';
