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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/sauces', [App\Http\Controllers\SauceController::class, 'index'])->name('sauces');

Route::get('/sauces/{id}', [App\Http\Controllers\SauceController::class, 'show'])->name('sauces');
/*
Route::post('/api/sauces');

Route::put('/api/sauces/:id');

Route::delete('api/sauces/:id');

Route::post('/api/sauces/:id/like'); */