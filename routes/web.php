<?php

use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TestimonialsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/**
 * Front Routes
 */
//Route::name('front.')->group(function () {
//    Route::view('/', 'front.index')->name('index');
//    Route::view('/about', 'front.about')->name('about');
//    Route::view('/service', 'front.service')->name('service');
//    Route::view('/contact', 'front.contact')->name('contact');
//});

Route::name('front.')->controller(FrontController::class)->group(function () {
    // =================================== HOME PAGE
    Route::post('/subscriber/store', 'subscriberStore')->name('subscriber.store');
    Route::get('/', 'index')->name('index');

    // =================================== ABOUT PAGE
    Route::get('/about', 'about')->name('about');

    // =================================== SERVICE PAGE
    Route::get('/service', 'service')->name('service');

    // =================================== CONTACT PAGE
    Route::post('/contact/store', 'contactStore')->name('contact.store');
    Route::get('/contact', 'contact')->name('contact');
});


/**
 * Admin routes
 */
Route::name('admin.')->prefix(LaravelLocalization::setLocale() . '/admin')->middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])->group(function () {

    Route::middleware('auth')->group(function () {
        // =================================== HOME PAGE
        Route::view('/', 'admin.index')->name('index');

        // =================================== SERVICES
        Route::controller(ServiceController::class)->group(function () {
            Route::resource('services', ServiceController::class);
        });

        // =================================== FEATURES
        Route::controller(FeatureController::class)->group(function () {
            Route::resource('features', FeatureController::class);
        });

        // =================================== MESSAGES
        Route::controller(MessageController::class)->group(function () {
            Route::resource('messages', MessageController::class)->only(['index', 'show', 'destroy']);
        });

        // =================================== SUBSCRIBERS
        Route::controller(SubscriberController::class)->group(function () {
            Route::resource('subscribers', SubscriberController::class)->only(['index', 'destroy']);
        });

        // =================================== TESTMONIALS
        Route::controller(TestimonialController::class)->group(function () {
            Route::resource('testimonials', TestimonialController::class);
        });

        // =================================== SETTINGS
        Route::controller(SettingController::class)->group(function () {
            Route::resource('settings', SettingController::class)->only(['index', 'update']);
        });
    });

    require __DIR__ . '/auth.php';
});
