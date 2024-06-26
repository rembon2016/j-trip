<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPage\BlogController;
use App\Http\Controllers\LandingPage\PageController;
use App\Http\Controllers\LandingPage\TourController;
use App\Http\Controllers\LandingPage\TourTypeController;
use App\Http\Controllers\LandingPage\DestinationController;
use App\Http\Controllers\LandingPage\WhatsappActionController;
use App\Http\Controllers\LandingPage\CustomerFeedbackController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group([
    'as' => 'landing-page.'
], function () {
    Route::get('/', [PageController::class, 'home'])->name('home');
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/contact', [PageController::class, 'contact'])->name('contact');
    Route::get('/contact-whatsapp', [WhatsappActionController::class, 'redirectWhatsapp'])->name('redirect-wa');

    Route::group([
        'prefix' => 'blog',
        'as' => 'blog.'
    ], function () {
        Route::get('/', [BlogController::class, 'index'])->name('index');
        Route::get('/{slug}', [BlogController::class, 'detail'])->name('detail');
    });

    Route::group([
        'prefix' => 'destination',
        'as' => 'destination.'
    ], function () {
        Route::get('/', [DestinationController::class, 'index'])->name('index');
        Route::get('/{slug}', [DestinationController::class, 'detail'])->name('detail');
    });

    Route::group([
        'prefix' => 'tour-type',
        'as' => 'tour-type.'
    ], function () {
        Route::get('/', [TourTypeController::class, 'index'])->name('index');
        Route::get('/{slug}', [TourTypeController::class, 'detail'])->name('detail');
    });

    Route::group([
        'prefix' => 'tour',
        'as' => 'tour.'
    ], function () {
        Route::get('/', [TourController::class, 'index'])->name('index');
        Route::get('/{slug}', [TourController::class, 'detail'])->name('detail');
        Route::post('/inquire/{id}', [TourController::class, 'store'])->name('store');
    });

    Route::group([
        'prefix' => 'customer-feedback',
        'as' => 'customer-feedback.',
    ], function () {
        Route::post('/', [CustomerFeedbackController::class, 'store'])->name('store');
    });
});

// Auth Route
include_once __DIR__ . '/auth.php';
include_once __DIR__ . '/admin.php';