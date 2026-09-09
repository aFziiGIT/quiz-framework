<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\PublicController;

// Public Routes
Route::get('/', [PublicController::class, 'index'])->name('public.index');
Route::get('/informasi/{informasi}', [PublicController::class, 'show'])->name('public.show');

// Admin CRUD Routes
Route::resource('informasi', InformasiController::class);