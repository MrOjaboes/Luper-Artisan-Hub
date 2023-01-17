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
Route::get('/autocomplete-search-query', [App\Http\Controllers\Guest\SearchController::class, 'query'])->name('autocomplete.search.query');
Route::get('/search', [App\Http\Controllers\Guest\SearchController::class, 'index'])->name('search');
Auth::routes();
Route::group(['prefix' => 'artisan',  'middleware' => 'isArtisan'], function () {
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('artisan');
Route::get('/profile', [App\Http\Controllers\Artisan\ProfileController::class, 'index'])->name('artisan.profile');
Route::post('/profile', [App\Http\Controllers\Artisan\ProfileController::class, 'updateProfile'])->name('artisan.profile');
Route::post('/profile/details', [App\Http\Controllers\Artisan\ProfileController::class, 'updateDetails'])->name('artisan.details');
Route::post('/profile/password', [App\Http\Controllers\Artisan\ProfileController::class, 'updatePassword'])->name('artisan.password');
Route::post('/profile/photo', [App\Http\Controllers\Artisan\ProfileController::class, 'updatePhoto'])->name('artisan.profile.photo');
Route::get('/projects', [App\Http\Controllers\Artisan\ProjectController::class, 'index'])->name('artisan.projects');
Route::post('/projects', [App\Http\Controllers\Artisan\ProjectController::class, 'store'])->name('artisan.projects');
});

Route::group(['prefix' => 'admin',  'middleware' => 'isAdmin'], function () {
    Route::get('/', [App\Http\Controllers\Admin\AdminSectionController::class, 'index'])->name('admin');
    Route::get('/location', [App\Http\Controllers\Admin\LocationController::class, 'index'])->name('admin.location');
    Route::get('/proffession', [App\Http\Controllers\Admin\ProfessionController::class, 'index'])->name('admin.proffession');
    Route::get('/artisans', [App\Http\Controllers\Admin\ArtisanController::class, 'index'])->name('admin.artisans');
    Route::get('/artisans/{profile}/details', [App\Http\Controllers\Admin\ArtisanController::class, 'details'])->name('admin.artisan.details');


});
