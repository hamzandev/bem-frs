<?php

use App\Http\Controllers\Admin\ArtikelController as AdminArtikelController;
use App\Http\Controllers\Admin\AspirasiController as AdminAspirasiController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/about', fn() => view('about'))->name('about');
Route::get('/kontak', fn() => view('kontak'))->name('kontak');

Route::get('/aspirasi', [AspirasiController::class, 'index'])->name('aspirasi');
Route::post('/aspirasi', [AspirasiController::class, 'store'])->name('aspirasi.simpan');

Route::resource('/artikel', ArtikelController::class)->only(['index', 'show']);

Route::get('/aspirasi/create', [AspirasiController::class, 'create'])->name('aspirasi.create');
Route::post('/aspirasi/store', [AspirasiController::class, 'store'])->name('aspirasi.store');

Route::get('/jurnal', JurnalController::class)->name('jurnal');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// ======== ADMIN ROUTES ============== //

Route::redirect('/admin', '/dashboard', 301);

Route::prefix('master-data')->name('master-data.')->group(function() {
    Route::resource('artikels', AdminArtikelController::class);
    Route::resource('aspirasi', AdminAspirasiController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
