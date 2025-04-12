<?php

use App\Http\Controllers\MainController;
use App\Livewire\Auth\Login;
use App\Livewire\Dashboard\About;
use App\Livewire\Dashboard\Contact;
use App\Livewire\Dashboard\JobRequests;
use App\Livewire\Dashboard\Jobs as DashboardJobs;
use App\Livewire\Dashboard\Projects as DashboardProjects;
use App\Livewire\Dashboard\Services;
use App\Livewire\Dashboard\Setting;
use App\Livewire\Dashboard\Statics;
use App\Livewire\Dashboard\SuccessPartners;
use App\Livewire\Frontend\Jobs;
use App\Livewire\Frontend\Main;
use App\Livewire\Frontend\Projects;
use Illuminate\Support\Facades\Route;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::get('/', Main::class)->name('home');
        Route::get('/projects', Projects::class)->name('projects');
        Route::get('/jobs', Jobs::class)->name('jobs');
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
            Route::get('projects', DashboardProjects::class)->name('projects');
            Route::get('jobs', DashboardJobs::class)->name('jobs');
            Route::get('job/requests', JobRequests::class)->name('jobs.requests');
            Route::get('partners', SuccessPartners::class)->name('partners');
            Route::get('contacts', Contact::class)->name('contacts');
        });
    }
);

// require __DIR__ . '/auth.php';
