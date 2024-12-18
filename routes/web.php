<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\ForYouPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\SettingsController;
use App\Http\Middleware\BusinessPermissionMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
})->name('home');

Route::get('/fyp', [ForYouPageController::class, 'index'])->name('fyp.index');
Route::get('/fyp/out-of-vacancies', [ForYouPageController::class, 'empty'])->name('fyp.out-of-vacancies');
Route::get('/fyp/confirm', [ForYouPageController::class, 'confirm'])->name('fyp.confirm');
Route::post('/fyp/accept', [ForYouPageController::class, 'acceptVacancy'])->name('fyp.acceptVacancy');
Route::post('/fyp/deny', [ForYouPageController::class, 'denyVacancy'])->name('fyp.denyVacancy');

Route::get('/fyp/reset', [ForYouPageController::class, 'resetStorage'])->name('fyp.reset');


// login routes and web
Route::get('register/step1', [RegisteredUserController::class, 'step1'])->name('register.step1');
Route::post('register/step1', [RegisteredUserController::class, 'storeStep1'])->name('register.storeStep1');

Route::get('/register/step2', [RegisteredUserController::class, 'step2'])->name('register.step2');
Route::post('/register/step2', [RegisteredUserController::class, 'storeStep2'])->name('register.storeStep2');

Route::get('/register/step3', [RegisteredUserController::class, 'step3'])->name('register.step3');
Route::post('/register/storeStep3', [RegisteredUserController::class, 'storeStep3'])->name('register.storeStep3');

Route::post('/register/store', [RegisteredUserController::class, 'store'])->name('register.store');

Route::get('/register/choice', function () {
    return view('login.login-choice');
})->name('register.choice');

Route::get('/register/success', function () {
    return view('login.registration-confirmed');
})->name('register.success');


// Settings routes
Route::get('/settings/settings', [SettingsController::class, 'index'])->middleware(['auth', 'verified'])->name('settings.index');
Route::get('/settings/preferences', [SettingsController::class, 'preferences'])->middleware(['auth', 'verified'])->name('preferences');

Route::get('settings/account', [SettingsController::class, 'account'])->middleware(['auth', 'verified'])->name('settings.account');
Route::post('settings/account', [SettingsController::class, 'storesettings'])->middleware(['auth', 'verified'])->name('settings.storesettings');

Route::get('settings/preferences', [SettingsController::class, 'preferences'])->middleware(['auth', 'verified'])->name('settings.preferences');
Route::post('settings/preferences', [SettingsController::class, 'storepreferences'])->middleware(['auth', 'verified'])->name('settings.preferences');

Route::get('settings/password', [SettingsController::class, 'password'])->middleware(['auth', 'verified'])->name('settings.password');
Route::post('settings/password', [SettingsController::class, 'storepassword'])->middleware(['auth', 'verified'])->name('settings.password');

Route::get('settings/navigation', function () {
    return view('settings/my-links');
})->middleware(['auth', 'verified'])->name('settings.my-links');

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


Route::get('open_vacancies_succes/{position}', [VacancyController::class, 'vacancySucces'])->name('open_vacancies.succes');
Route::get('open_vacancies', [VacancyController::class, 'index'])->name('open_vacancies.index');
Route::get('open_vacancies/{vacancy}', [VacancyController::class, 'show'])->name('open_vacancies.show');

Route::post('/open_vacancies/{vacancy}/apply', [VacancyController::class, 'vacancyApplicationHandler'])
    ->name('open_vacancies.vacancyApplicationHandler');


Route::get('my-businesses', [BusinessController::class, 'index'])->name('business.index');
Route::get('business/{business}', [BusinessController::class, 'show'])->name('business.show');



//Middleware that checks if you're a CEO or Admin for a specific business
Route::middleware(BusinessPermissionMiddleware::class)->group(function () {

    //CRUD functions for dashboard
    Route::get('business/create', [BusinessController::class, 'create'])->name('business.create');
    Route::post('business', [BusinessController::class, 'store'])->name('business.store');
    Route::get('business/{business}/edit', [BusinessController::class, 'edit'])->name('business.edit');
    Route::put('business/{business}', [BusinessController::class, 'update'])->name('business.update');
    Route::delete('business/{business}', [BusinessController::class, 'destroy'])->name('business.destroy');
    Route::get('business/{business}/dashboard', [BusinessController::class, 'dashboard'])->name('business.dashboard');

    //Crud Routes for vacancy management
    Route::get('business/{business}/vacancies', [BusinessController::class, 'vacancies'])->name('business.vacancies');
    Route::get('business/{business}/vacancy/create', [VacancyController::class, 'create'])->name('vacancy.create');
    Route::post('business/{business}/vacancy/store', [VacancyController::class, 'store'])->name('vacancy.store');
    Route::get('business/{business}/vacancy/{vacancy}/edit', [VacancyController::class, 'edit'])->name('vacancy.edit');
    Route::put('business/{business}/vacancy/{vacancy}/store', [VacancyController::class, 'update'])->name('vacancy.update');
    Route::delete('business/{business}/vacancy/{vacancy}/delete', [VacancyController::class, 'destroy'])->name('vacancy.destroy');

    //Manage applications for specific vacancies
    Route::get('business/{business}/vacancy/{vacancy}/applications', [VacancyController::class, 'viewApplications'])->name('vacancy.applications');
    Route::post('business/{business}/vacancy/{vacancy}/accept', [VacancyController::class, 'acceptHandler'])->name('vacancy.accept');
});

Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
Route::get('/settings', [SettingsController::class, 'index'])->name('settings');


require __DIR__.'/auth.php';
