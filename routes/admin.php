<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Content\BlogController;
use App\Http\Controllers\Admin\Users\StaffController;
use App\Http\Controllers\Admin\Content\GalleryController;
use App\Http\Controllers\Admin\Profile\ProfileController;
use App\Http\Controllers\Admin\Utilities\CkeditorController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\Users\AdministratorController;

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => 'auth'
], function () {
    Route::get('/', fn () => redirect()->route('admin.dashboard.index'));
    Route::post('/content/upload', [CkeditorController::class, 'upload'])->name('content.upload');

    // Dashboard Route
    Route::group([
        'prefix' => 'dashboard',
        'as' => 'dashboard.'
    ], function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');
    });

    // Profile Route
    Route::group([
        'prefix' => 'profile',
        'as' => 'profile.'
    ], function () {
        Route::get('/', [ProfileController::class, 'index'])->name('index');
        Route::post('/', [ProfileController::class, 'store'])->name('update');
    });

    Route::group([
        'prefix' => 'blog',
        'as' => 'blog.'
    ], function () {
        Route::get('/', [BlogController::class, 'index'])->name('index');
        Route::get('/create', [BlogController::class, 'create'])->name('create');
        Route::post('/', [BlogController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [BlogController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [BlogController::class, 'delete'])->name('delete');
    });

    Route::group([
        'prefix' => 'gallery',
        'as' => 'gallery.'
    ], function () {
        Route::get('/', [GalleryController::class, 'index'])->name('index');
        Route::get('/create', [GalleryController::class, 'create'])->name('create');
        Route::post('/', [GalleryController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [GalleryController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [GalleryController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [GalleryController::class, 'delete'])->name('delete');
    });

    Route::group([
        'prefix' => 'users',
        'as' => 'users.'
    ], function () {
        Route::group([
            'prefix' => 'administrator',
            'as' => 'administrator.'
        ], function () {
            Route::get('/', [AdministratorController::class, 'index'])->name('index');
            Route::get('/create', [AdministratorController::class, 'create'])->name('create');
            Route::post('/', [AdministratorController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [AdministratorController::class, 'edit'])->name('edit');
            Route::put('/update/{id}', [AdministratorController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [AdministratorController::class, 'delete'])->name('delete');
        });

        Route::group([
            'prefix' => 'staff',
            'as' => 'staff.'
        ], function () {
            Route::get('/', [StaffController::class, 'index'])->name('index');
            Route::get('/create', [StaffController::class, 'create'])->name('create');
            Route::post('/', [StaffController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [StaffController::class, 'edit'])->name('edit');
            Route::put('/update/{id}', [StaffController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [StaffController::class, 'delete'])->name('delete');
        });
    });
});