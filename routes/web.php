<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/',[HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Contact Page
Route::get('contactus', [ContactController::class, 'index'])->name('contact.index');

// Auth Routes
Auth::routes(['register' => false]);

