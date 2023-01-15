<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::group(['prefix' => 'artisan',  'middleware' => 'auth'], function () {
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('artisan');
Route::get('/profile', [App\Http\Controllers\Artisan\ProfileController::class, 'index'])->name('artisan.profile');
Route::post('/profile', [App\Http\Controllers\Artisan\ProfileController::class, 'updateProfile'])->name('artisan.profile');
Route::post('/profile/details', [App\Http\Controllers\Artisan\ProfileController::class, 'updateDetails'])->name('artisan.details');
Route::post('/profile/password', [App\Http\Controllers\Artisan\ProfileController::class, 'updatePassword'])->name('artisan.password');
});

Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function () {
    Route::get('/', [App\Http\Controllers\Admin\AdminSectionController::class, 'index'])->name('admin');
    Route::get('/location', [App\Http\Controllers\Admin\LocationController::class, 'index'])->name('admin.location');
    Route::get('/proffession', [App\Http\Controllers\Admin\ProfessionController::class, 'index'])->name('admin.proffession');
    Route::get('/artisans', [App\Http\Controllers\Admin\ArtisanController::class, 'index'])->name('admin.artisans');
    Route::get('/artisans/{profile}/details', [App\Http\Controllers\Admin\ArtisanController::class, 'details'])->name('admin.artisan.details');


});
