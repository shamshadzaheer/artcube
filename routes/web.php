<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/',[HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// Auth Routes
Auth::routes(['register' => false]);

