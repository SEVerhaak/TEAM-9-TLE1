<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\SettingsController;
use App\Http\Middleware\BusinessPermissionMiddleware;
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

Route::get('/register/choice', function () {
    return view('login.login-choice');
})->name('register.choice');

Route::get('/register/success', function () {
    return view('login.registration-confirmed');
})->name('register.success');
// JUNO CSS TEST PAGE
Route::get('/junotest', function () {
    return view('login.login-step-1');
});

// Settings routes
Route::get('/settings/settings', [SettingsController::class, 'index'])->name('settings.index');
Route::get('/settings/preferences', [SettingsController::class, 'preferences'])->name('preferences');

Route::get('settings/account', [\App\Http\Controllers\SettingsController::class, 'account'])->name('settings.account');
Route::post('settings/account', [\App\Http\Controllers\SettingsController::class, 'storesettings'])->name('settings.account');

Route::get('settings/preferences', [\App\Http\Controllers\SettingsController::class, 'preferences'])->name('settings.preferences');
Route::post('settings/preferences', [\App\Http\Controllers\SettingsController::class, 'storepreferences'])->name('settings.preferences');

Route::get('settings/password', [\App\Http\Controllers\SettingsController::class, 'password'])->name('settings.password');
Route::post('settings/password', [\App\Http\Controllers\SettingsController::class, 'storepassword'])->name('settings.password');



Route::get('/vacature-selectie', function () {
    return view('vacancy-selection-page');
})->name('vacancy-select');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', [VacancyController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('open_vacancies', VacancyController::class);
Route::post('/open_vacancies/{vacancy}/apply', [VacancyController::class, 'vacancyApplicationHandler'])
    ->name('open_vacancies.vacancyApplicationHandler');


Route::get('business', [BusinessController::class, 'index'])->name('business.index');
Route::get('business/{business}', [BusinessController::class, 'show'])->name('business.show');

Route::middleware(BusinessPermissionMiddleware::class)->group(function () {
    Route::get('business/create', [BusinessController::class, 'create'])->name('business.create');
    Route::post('business', [BusinessController::class, 'store'])->name('business.store');
    Route::get('business/{business}/edit', [BusinessController::class, 'edit'])->name('business.edit');
    Route::put('business/{business}', [BusinessController::class, 'update'])->name('business.update');
    Route::delete('business/{business}', [BusinessController::class, 'destroy'])->name('business.destroy');

    Route::get('business/{business}/dashboard', [BusinessController::class, 'dashboard'])->name('business.dashboard');
    Route::get('business/{business}/vacancies', [BusinessController::class, 'vacancies'])->name('business.vacancies');
});

Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
Route::get('/settings', [SettingsController::class, 'index'])->name('settings');


require __DIR__.'/auth.php';
