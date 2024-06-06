<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::group([
    'prefix' => 'auth',
    'as' => 'auth.',
], function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('store.login');

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
});