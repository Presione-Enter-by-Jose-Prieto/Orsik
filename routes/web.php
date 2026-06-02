<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'landing-page')->name('landing-page');
Route::view('/docs', 'docs')->name('docs');
Route::view('/sign-in', 'login')->name('sign-in');
Route::view('/register', 'register')->name('register');

