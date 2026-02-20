<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\LibraryController;

// Se elimina la ruta con la función anónima que retornaba 'welcome' para evitar conflictos
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/explorar', [ExploreController::class, 'index'])->name('explore');
Route::get('/biblioteca', [LibraryController::class, 'index'])->name('library');