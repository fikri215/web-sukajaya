<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DashboardController::class, 'index'])->name('homepage');

Route::prefix('owner')->group(function() {
    require __DIR__.'/auth.php';

    Route::any('/register', function () {
        return view('auth.login');
    });
    
    Route::middleware('auth')->group(function() {
        Route::resource('setting', SettingController::class)->only(['index', 'update']);
        Route::patch('setting/{setting}/update-logo', [SettingController::class, 'updateLogo'])->name('setting.update-logo');
        Route::patch('setting/{setting}/delete-logo', [SettingController::class, 'deleteLogo'])->name('setting.delete-logo');
        Route::resource('hero', HeroController::class)->only(['index', 'update']);
        Route::resource('about', AboutController::class)->only(['index', 'update']);
        Route::patch('about/{about}/update-image', [AboutController::class, 'updateImage'])->name('about.update-image');
        Route::resource('service', ServiceController::class);
        Route::resource('category', CategoryController::class);
        Route::resource('gallery', GalleryController::class)->except(['edit', 'update']);
    });
});