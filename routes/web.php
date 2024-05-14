<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleHandleController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/template', function() {
   return view('template.authentication-login');
});

/**
 * TODO: handle google login
 */
    Route::post('/google/login', [GoogleHandleController::class, 'login'])->name('googleLogin');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
