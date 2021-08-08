<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/',[HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// About
Route::get('about', [AboutController::class, 'index'])->name('about.index');

// Contact Page
Route::get('contactus', [ContactController::class, 'index'])->name('contact.index');
Route::post('contactus', [ContactController::class, 'sendEmail'])->name('contact.submit');

// Videos
Route::get('videos', [VideoController::class, 'index'])->name('videos.index');

// Photos
Route::get('photos', [PhotoController::class, 'index'])->name('photos.index');

// Services
Route::get('services', [ServiceController::class, 'index'])->name('services.index');

// Auth Routes
Auth::routes(['register' => false]);

