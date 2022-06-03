<?php

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

Route::middleware(['auth'])-> group(function() {
    Route::get('/home', [\App\Http\Controllers\MainController::class, 'show']);
    Route::get('/homes', [\App\Http\Controllers\MainController::class, 'showHomes']);
    Route::get('/animals', [\App\Http\Controllers\MainController::class, 'showAnimals']);

    Route::get('/location/{address}', [\App\Http\Controllers\LocationController::class, 'showSpecific']);
    Route::get('/searching/{id}', [\App\Http\Controllers\AnimalController::class, 'showSpecific']);
});

Route::middleware(['auth', 'admin'])-> group(function() {
    Route::get('/admin', [App\Http\Controllers\AdminController::class, 'show']);
});


Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
