<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\galleryController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\userController;
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

Route::get('/', [userController::class, 'index']);
Route::post('/doLogin', [userController::class, 'doLogin'])->name('login');
Route::get('/doLogout', [userController::class, 'doLogout'])->name('logout');
// Route::get('/sample', [userController::class, 'sample']);


Route::get('/home', [homeController::class, 'index'])->name('home');
Route::get('/about', [aboutController::class, 'index'])->name('about');
Route::get('/gallery', [galleryController::class, 'index'])->name('gallery');
Route::get('/contact', [contactController::class, 'index'])->name('contact');
Route::post('/contact/submit', [contactController::class, 'store'])->name('contact/submit');
Route::get('/contact/delete/{id}', [contactController::class, 'delete'])->name('contact/delete');
Route::post('/contact/edit', [contactController::class, 'edit'])->name('contact/edit');
