<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;
Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/services', [App\Http\Controllers\IndexController::class, 'services'])->name('services');
Route::get('/about-us', [App\Http\Controllers\IndexController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\IndexController::class, 'contact'])->name('contact');
Route::post('/new-contact', [App\Http\Controllers\IndexController::class, 'ContactPost'])->name('contact.post');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('auth/facebook', [SocialController::class, 'facebookRedirect']);

Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
        Route::get('settings', [\App\Http\Controllers\UserController::class, 'index'])->name('user.profile.update');
        Route::put('/user/profile/update', [App\Http\Controllers\UserController::class, 'update'])->name('user.profile.update');
    });
});
