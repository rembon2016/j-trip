<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Users\StaffController;
use App\Http\Controllers\Admin\Content\BlogController;
use App\Http\Controllers\Admin\Content\HomeController;
use App\Http\Controllers\Admin\Content\AboutController;
use App\Http\Controllers\Admin\Other\SettingController;
use App\Http\Controllers\Admin\Vacation\TourController;
use App\Http\Controllers\Admin\Content\GalleryController;
use App\Http\Controllers\Admin\Profile\ProfileController;
use App\Http\Controllers\Admin\Vacation\TourTypeController;
use App\Http\Controllers\Admin\Utilities\CkeditorController;
use App\Http\Controllers\Admin\Content\TestimonialController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\Message\TourInquiryController;
use App\Http\Controllers\Admin\Users\AdministratorController;
use App\Http\Controllers\Admin\Vacation\DestinationController;
use App\Http\Controllers\Admin\Message\CustomerFeedbackController;

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
        'prefix' => 'users',
        'as' => 'users.'
    ], function () {
        Route::group([
            'prefix' => 'administrator',
            'as' => 'administrator.'
        ], function () {
            Route::get('/', [AdministratorController::class, 'index'])->name('index')->middleware('has:see-administrator');
            Route::get('/create', [AdministratorController::class, 'create'])->name('create')->middleware('has:manage-administrator');
            Route::post('/', [AdministratorController::class, 'store'])->name('store')->middleware('has:manage-administrator');
            Route::get('/edit/{id}', [AdministratorController::class, 'edit'])->name('edit')->middleware('has:manage-administrator');
            Route::put('/update/{id}', [AdministratorController::class, 'update'])->name('update')->middleware('has:manage-administrator');
            Route::delete('/delete/{id}', [AdministratorController::class, 'delete'])->name('delete')->middleware('has:manage-administrator');
        });

        Route::group([
            'prefix' => 'staff',
            'as' => 'staff.'
        ], function () {
            Route::get('/', [StaffController::class, 'index'])->name('index')->middleware('has:see-staff');
            Route::get('/create', [StaffController::class, 'create'])->name('create')->middleware('has:manage-staff');
            Route::post('/', [StaffController::class, 'store'])->name('store')->middleware('has:manage-staff');
            Route::get('/edit/{id}', [StaffController::class, 'edit'])->name('edit')->middleware('has:manage-staff');
            Route::put('/update/{id}', [StaffController::class, 'update'])->name('update')->middleware('has:manage-staff');
            Route::delete('/delete/{id}', [StaffController::class, 'delete'])->name('delete')->middleware('has:manage-staff');
        });
    });

    // Vacations Route
    Route::group([
        'prefix' => 'destinasi',
        'as' => 'destination.'
    ], function () {
        Route::get('/', [DestinationController::class, 'index'])->name('index')->middleware('has:see-destination');
        Route::get('/create', [DestinationController::class, 'create'])->name('create')->middleware('has:manage-destination');
        Route::post('/', [DestinationController::class, 'store'])->name('store')->middleware('has:manage-destination');
        Route::get('/edit/{id}', [DestinationController::class, 'edit'])->name('edit')->middleware('has:manage-destination');
        Route::put('/update/{id}', [DestinationController::class, 'update'])->name('update')->middleware('has:manage-destination');
        Route::delete('/delete/{id}', [DestinationController::class, 'delete'])->name('delete')->middleware('has:manage-destination');
    });

    Route::group([
        'prefix' => 'tipe-tour',
        'as' => 'tour-type.'
    ], function () {
        Route::get('/', [TourTypeController::class, 'index'])->name('index')->middleware('has:see-tour-type');
        Route::get('/create', [TourTypeController::class, 'create'])->name('create')->middleware('has:manage-tour-type');
        Route::post('/', [TourTypeController::class, 'store'])->name('store')->middleware('has:manage-tour-type');
        Route::get('/edit/{id}', [TourTypeController::class, 'edit'])->name('edit')->middleware('has:manage-tour-type');
        Route::put('/update/{id}', [TourTypeController::class, 'update'])->name('update')->middleware('has:manage-tour-type');
        Route::delete('/delete/{id}', [TourTypeController::class, 'delete'])->name('delete')->middleware('has:manage-tour-type');
    });

    Route::group([
        'prefix' => 'tour',
        'as' => 'tour.'
    ], function () {
        Route::get('/', [TourController::class, 'index'])->name('index')->middleware('has:see-tour');
        Route::get('/create', [TourController::class, 'create'])->name('create')->middleware('has:manage-tour');
        Route::post('/', [TourController::class, 'store'])->name('store')->middleware('has:manage-tour');
        Route::get('/edit/{id}', [TourController::class, 'edit'])->name('edit')->middleware('has:manage-tour');
        Route::put('/update/{id}', [TourController::class, 'update'])->name('update')->middleware('has:manage-tour');
        Route::delete('/delete/{id}', [TourController::class, 'delete'])->name('delete')->middleware('has:manage-tour');
    });

    // Messages Route
    Route::group([
        'prefix' => 'booking-tour',
        'as' => 'booking-tour.'
    ], function () {
        Route::get('/', [TourInquiryController::class, 'index'])->name('index')->middleware('has:see-booking-tour');
        Route::get('/{id}', [TourInquiryController::class, 'detail'])->name('detail')->middleware('has:see-booking-tour');
    });

    Route::group([
        'prefix' => 'customer-feedback',
        'as' => 'customer-feedback.'
    ], function () {
        Route::get('/', [CustomerFeedbackController::class, 'index'])->name('index')->middleware('has:see-customer-feedback');
        Route::get('/{id}', [CustomerFeedbackController::class, 'detail'])->name('detail')->middleware('has:see-customer-feedback');
    });


    // Contents Route
    Route::group([
        'prefix' => 'blog',
        'as' => 'blog.'
    ], function () {
        Route::get('/', [BlogController::class, 'index'])->name('index')->middleware('has:see-blog');
        Route::get('/create', [BlogController::class, 'create'])->name('create')->middleware('has:manage-blog');
        Route::post('/', [BlogController::class, 'store'])->name('store')->middleware('has:manage-blog');
        Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('edit')->middleware('has:manage-blog');
        Route::put('/update/{id}', [BlogController::class, 'update'])->name('update')->middleware('has:manage-blog');
        Route::delete('/delete/{id}', [BlogController::class, 'delete'])->name('delete')->middleware('has:manage-blog');
    });

    Route::group([
        'prefix' => 'galeri',
        'as' => 'gallery.'
    ], function () {
        Route::get('/', [GalleryController::class, 'index'])->name('index')->middleware('has:see-gallery');
        Route::get('/create', [GalleryController::class, 'create'])->name('create')->middleware('has:manage-gallery');
        Route::post('/', [GalleryController::class, 'store'])->name('store')->middleware('has:manage-gallery');
        Route::get('/edit/{id}', [GalleryController::class, 'edit'])->name('edit')->middleware('has:manage-gallery');
        Route::put('/update/{id}', [GalleryController::class, 'update'])->name('update')->middleware('has:manage-gallery');
        Route::delete('/delete/{id}', [GalleryController::class, 'delete'])->name('delete')->middleware('has:manage-gallery');
    });

    Route::group([
        'prefix' => 'testimoni',
        'as' => 'testimonial.'
    ], function () {
        Route::get('/', [TestimonialController::class, 'index'])->name('index')->middleware('has:see-testimonial');
        Route::get('/create', [TestimonialController::class, 'create'])->name('create')->middleware('has:manage-testimonial');
        Route::post('/', [TestimonialController::class, 'store'])->name('store')->middleware('has:manage-testimonial');
        Route::get('/edit/{id}', [TestimonialController::class, 'edit'])->name('edit')->middleware('has:manage-testimonial');
        Route::put('/update/{id}', [TestimonialController::class, 'update'])->name('update')->middleware('has:manage-testimonial');
        Route::delete('/delete/{id}', [TestimonialController::class, 'delete'])->name('delete')->middleware('has:manage-testimonial');
    });

    // Other Route
    Route::group([
        'prefix' => 'setting',
        'as' => 'setting.'
    ], function () {
        Route::get('/', [SettingController::class, 'index'])->name('index')->middleware('has:manage-web-setting');
        Route::post('/', [SettingController::class, 'store'])->name('store')->middleware('has:manage-web-setting');
    });
    Route::group([
        'prefix' => 'home',
        'as' => 'home.'
    ], function () {
        Route::get('/', [HomeController::class, 'index'])->name('index');
        Route::post('/{id}', [HomeController::class, 'edit'])->name('edit');
    });

    Route::group([
        'prefix' => 'about',
        'as' => 'about.'
    ], function () {
        Route::get('/', [AboutController::class, 'index'])->name('index');
        Route::post('/{id}', [AboutController::class, 'edit'])->name('edit');
    });
});