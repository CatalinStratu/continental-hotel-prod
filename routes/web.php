<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;
Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/services', [App\Http\Controllers\IndexController::class, 'services'])->name('services');
Route::get('/about-us', [App\Http\Controllers\IndexController::class, 'about'])->name('about');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('auth/facebook', [SocialController::class, 'facebookRedirect']);

Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
