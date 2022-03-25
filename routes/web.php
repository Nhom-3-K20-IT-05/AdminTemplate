<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthController;

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
// Index //
Route::get('/', function () {
    return view('index.dashboard');
});
Route::get('/dashboard', function () {
    return view('index.dashboard');
});

// Layouts //
Route::get('/blank', function () {
    return view('layouts.layouts-blank');
});
Route::get('/container', function () {
    return view('layouts.layouts-container');
});
Route::get('/fluid', function () {
    return view('layouts.layouts-fluid');
});
Route::get('/without-menu', function () {
    return view('layouts.layouts-without-menu');
});
Route::get('/without-navbar', function () {
    return view('layouts.layouts-without-navbar');
});

// Account settings //
Route::get('/settings-account', function () {
    return view('account-settings.pages-account-settings-account');
});

Route::get('/settings-connections', function () {
    return view('account-settings.pages-account-settings-connections');
});

Route::get('/settings-notifications', function () {
    return view('account-settings.pages-account-settings-notifications');
});

// Auth //
Route::get('/login','AuthController@login');
Route::get('/register','AuthController@register');
Route::get('/forgot-password','AuthController@forgot_password');

Route::view("login",'login');
Route::view("register",'register');
Route::view("forgot-password",'forgot_password');

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Misc //
Route::get('/error', function () {
    return view('misc.pages-misc-error');
});
Route::get('/maintenance', function () {
    return view('misc.pages-misc-under-maintenance');
});

// Cards //
Route::get('/cards', function () {
    return view('cards.cards-basic');
});

//  Extended UI //
Route::get('/perfect-scrollbar', function () {
    return view('extended-ui.extended-ui-perfect-scrollbar');
});
Route::get('/text-divider', function () {
    return view('extended-ui.extended-ui-text-divider');
});

// Boxicons //
Route::get('/boxicons', function () {
    return view('boxicons.icons-boxicons');
});

// Form elements //
Route::get('/basic-inputs', function () {
    return view('form-elements.forms-basic-inputs');
});
Route::get('/input-groups', function () {
    return view('form-elements.forms-input-groups');
});

// Form layouts //
Route::get('/layouts-horizontal', function () {
    return view('form-layouts.form-layouts-horizontal');
});
Route::get('/layouts-vertical', function () {
    return view('form-layouts.form-layouts-vertical');
});

// Tables //
Route::get('/tables', function () {
    return view('table.tables-basic');
});

// Admin //
Route::get('/admin2', function () {
     return view('index.admin');
})->middleware('logon');

Route::get('/admin3', function () {
    return"this user blog";    
});
