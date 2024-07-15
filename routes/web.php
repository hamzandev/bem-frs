<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', fn () => view('home'))->name('home');
Route::get('/about', fn () => view('about'))->name('about');
Route::get('/aspirasi', fn () => view('aspirasi'))->name('aspirasi');

use App\Http\Controllers\AspirasiController;

Route::get('/aspirasi/create', [AspirasiController::class, 'create'])->name('aspirasi.create');
Route::post('/aspirasi/store', [AspirasiController::class, 'store'])->name('aspirasi.store');



// Route::redirect('/', '/admin/login');
