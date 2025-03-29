<?php

use App\Http\Controllers\MainController;
use App\Livewire\Auth\Login;
use App\Livewire\Dashboard\About;
use App\Livewire\Dashboard\Services;
use App\Livewire\Dashboard\Setting;
use App\Livewire\Dashboard\Statics;
use App\Livewire\Dashboard\SuccessPartners;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::get('/', [MainController::class, 'main'])->name('home');
        Route::post('/contact/store', [MainController::class, 'contactStore'])->name('contact.store');

        Livewire::setUpdateRoute(function ($handle) {
            return Route::post('/livewire/update', $handle);
        });

        Route::group(['middleware' => 'guest'], function () {
            Route::get('/login', Login::class)->name('login');
        });

        Route::group(['middleware' => 'auth', 'prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
            Route::get('settings', Setting::class)->name('settings');
            Route::get('statics', Statics::class)->name('statics');
            Route::get('about', About::class)->name('about');
            Route::get('services', Services::class)->name('services');
            Route::get('partners', SuccessPartners::class)->name('partners');
        });
    }
);

// require __DIR__ . '/auth.php';
