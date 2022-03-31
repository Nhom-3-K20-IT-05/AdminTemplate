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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Account settings //
Route::get('/settings-account', [App\Http\Controllers\ProfileController::class, 'account'])->name('settings-account');
Route::get('/settings-connections', [App\Http\Controllers\ProfileController::class, 'connections'])->name('settings-connections');
Route::get('/settings-notifications', [App\Http\Controllers\ProfileController::class, 'notifications'])->name('settings-notifications');