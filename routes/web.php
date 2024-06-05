<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPage\BlogController;
use App\Http\Controllers\LandingPage\PageController;

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

    Route::group([
        'prefix' => 'blog',
        'as' => 'blog.'
    ], function () {
        Route::get('/', [BlogController::class, 'index'])->name('index');
        Route::get('/detail/{id}', [BlogController::class, 'detail'])->name('detail');
    });
});
