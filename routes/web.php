<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\PendudukController;

Route::get('/', function () {
    return view('welcome');
});

// Routes for Provinsi

Route::get('/provinsi', [ProvinsiController::class, 'index'])->name('provinsi.index');
Route::get('/provinsi/create', [ProvinsiController::class, 'create'])->name('provinsi.create');
Route::post('/provinsi', [ProvinsiController::class, 'store'])->name('provinsi.store');
Route::get('/provinsi/{id}/edit', [ProvinsiController::class, 'edit'])->name('provinsi.edit');
Route::put('/provinsi/{id}', [ProvinsiController::class, 'update'])->name('provinsi.update');
Route::delete('/provinsi/{id}', [ProvinsiController::class, 'destroy'])->name('provinsi.destroy');


// Routes for Kota
Route::get('/kota', [KotaController::class, 'index'])->name('kota.index');
Route::get('/kota/create', [KotaController::class, 'create'])->name('kota.create');
Route::post('/kota', [KotaController::class, 'store'])->name('kota.store');
Route::get('/kota/{id}/edit', [KotaController::class, 'edit'])->name('kota.edit');
Route::put('/kota/{id}', [KotaController::class, 'update'])->name('kota.update');
Route::delete('/kota/{id}', [KotaController::class, 'destroy'])->name('kota.destroy');

// Routes for Penduduk
Route::get('/penduduk', [PendudukController::class, 'index'])->name('penduduk.index');
Route::get('/penduduk/create', [PendudukController::class, 'create'])->name('penduduk.create');
Route::post('/penduduk', [PendudukController::class, 'store'])->name('penduduk.store');
Route::get('/penduduk/{id}/edit', [PendudukController::class, 'edit'])->name('penduduk.edit');
Route::put('/penduduk/{id}', [PendudukController::class, 'update'])->name('penduduk.update');
Route::delete('/penduduk/{id}', [PendudukController::class, 'destroy'])->name('penduduk.destroy');
Route::get('/penduduk/search', [PendudukController::class, 'search'])->name('penduduk.search');
