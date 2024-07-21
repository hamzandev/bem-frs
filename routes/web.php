<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JurnalController;
use Illuminate\Support\Facades\Route;


Route::get('/', HomeController::class)->name('home');
Route::get('/about', fn () => view('about'))->name('about');
Route::get('/kontak', fn () => view('kontak'))->name('kontak');

Route::get('/aspirasi', [AspirasiController::class, 'index'] )->name('aspirasi');
Route::post('/aspirasi', [AspirasiController::class, 'store'] )->name('aspirasi.simpan');

Route::resource('/artikel', ArtikelController::class)->only(['index', 'show']);

Route::get('/aspirasi/create', [AspirasiController::class, 'create'])->name('aspirasi.create');
Route::post('/aspirasi/store', [AspirasiController::class, 'store'])->name('aspirasi.store');

Route::get('/jurnal', JurnalController::class)->name('jurnal');

