<?php
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
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
Auth::routes(['register' => true, 'password.request' => false]);


// Admin
Route::prefix('admin')->middleware('auth')->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin');

    Route::get('photo-gallery', [PhotoController::class, 'admin'])->name('admin.photos');
    Route::get('photo-gallery/{photo}/edit', [PhotoController::class, 'edit'])->name('admin.photos.edit');
    Route::put('photo-gallery/{photo}', [PhotoController::class, 'update'])->name('admin.photos.update');
    Route::delete('photo-gallery/{photo}', [PhotoController::class, 'destroy'])->name('admin.photos.delete');
    Route::get('photo-gallery/create', [PhotoController::class, 'create'])->name('admin.photos.create');
    Route::post('photo-gallery', [PhotoController::class, 'store'])->name('admin.photos.store');

    Route::get('video-gallery', [VideoController::class, 'admin'])->name('admin.videos');
    Route::get('video-gallery/{video}/edit', [VideoController::class, 'edit'])->name('admin.videos.edit');
    Route::put('video-gallery/{video}', [VideoController::class, 'update'])->name('admin.videos.update');
    Route::delete('video-gallery/{video}', [VideoController::class, 'destroy'])->name('admin.videos.delete');
    Route::get('video-gallery/create', [VideoController::class, 'create'])->name('admin.videos.create');
    Route::post('video-gallery', [VideoController::class, 'store'])->name('admin.videos.store');

    Route::get('pages', [PageController::class, 'index'])->name('admin.pages');
    Route::get('page/{page}/edit', [PageController::class, 'edit'])->name('admin.pages.edit');
    Route::put('page/{page}', [PageController::class, 'update'])->name('admin.pages.update');
    Route::delete('page/{page}', [PageController::class, 'destroy'])->name('admin.pages.delete');
    Route::get('page/create', [PageController::class, 'create'])->name('admin.pages.create');
    Route::post('page', [PageController::class, 'store'])->name('admin.pages.store');
});
