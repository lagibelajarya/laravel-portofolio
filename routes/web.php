<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\galleryController;
use App\Http\Controllers\homeController;

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

Route::get('/', [homeController::class, 'index'])->name('home');
Route::get('/about', [aboutController::class, 'index'])->name('about');
Route::get('/gallery', [galleryController::class, 'index'])->name('gallery');
Route::get('/contact', [contactController::class, 'index'])->name('contact');
Route::post('/submit', [contactController::class, 'store'])->name('submit');
