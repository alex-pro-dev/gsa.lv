<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\ContactDetailController;
use App\Http\Controllers\Admin\ContactMessageController as AdminContactMessageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HomepageSettingController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController as PublicServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/services/{service}', [PublicServiceController::class, 'show'])->name('services.show');
Route::post('/contact', [ContactMessageController::class, 'store'])->name('contact.store');

Route::prefix('admin')->name('admin.')->group(function (): void {
    Route::middleware('guest')->group(function (): void {
        Route::get('/login', [AuthController::class, 'create'])->name('login');
        Route::post('/login', [AuthController::class, 'store'])->name('login.store');
    });

    Route::middleware(['auth', 'admin'])->group(function (): void {
        Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');
        Route::get('/dashboard', DashboardController::class)->name('dashboard');

        Route::get('/homepage-settings/edit', [HomepageSettingController::class, 'edit'])->name('homepage-settings.edit');
        Route::put('/homepage-settings', [HomepageSettingController::class, 'update'])->name('homepage-settings.update');

        Route::resource('services', ServiceController::class)->except(['show']);
        Route::resource('services.products', ProductController::class)->except(['index', 'show']);

        Route::get('/contact-details/edit', [ContactDetailController::class, 'edit'])->name('contact-details.edit');
        Route::put('/contact-details', [ContactDetailController::class, 'update'])->name('contact-details.update');

        Route::get('/contact-messages', [AdminContactMessageController::class, 'index'])->name('contact-messages.index');
        Route::get('/contact-messages/{contactMessage}', [AdminContactMessageController::class, 'show'])->name('contact-messages.show');
        Route::delete('/contact-messages/{contactMessage}', [AdminContactMessageController::class, 'destroy'])->name('contact-messages.destroy');
    });
});
