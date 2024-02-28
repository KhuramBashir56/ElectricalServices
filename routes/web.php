<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['localization'])->prefix('{locale?}')->where(['locale' => '[a-zA-Z]{2}'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');
    Route::get('about-us', function () {
        return view('about');
    })->name('about_us');
});
Auth::routes();
