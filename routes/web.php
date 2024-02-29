<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['localization'])->prefix('{locale?}')->where(['locale' => '[a-zA-Z]{2}'])->group(function () {
    Route::view('/', 'welcome')->name('home');
    Route::view('gallery', 'gallery')->name('gallery');
    Route::view('about-us', 'about-us')->name('about_us');
    Route::view('contact-us', 'contact-us')->name('contact_us');
    Route::view('terms', 'terms')->name('terms_and_conditions');
    Route::view('privacy', 'privacy')->name('privacy_policy');
});

Auth::routes();