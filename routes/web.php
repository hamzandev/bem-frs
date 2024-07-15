<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeController::class)->name('home');
Route::get('/about', fn () => view('about'))->name('about');
Route::get('/kontak', fn () => view('kontak'))->name('kontak');

Route::get('/aspirasi', [AspirasiController::class, 'index'] )->name('aspirasi');
Route::post('/aspirasi', [AspirasiController::class, 'store'] )->name('aspirasi.store');

Route::resource('/artikel', ArtikelController::class)->only(['index', 'show']);


// Route::redirect('/', '/admin/login');
