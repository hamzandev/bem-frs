<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', fn () => view('home'))->name('home');
Route::get('/about', fn () => view('about'))->name('about');
Route::get('/aspirasi', fn () => view('aspirasi'))->name('aspirasi');


// Route::redirect('/', '/admin/login');
