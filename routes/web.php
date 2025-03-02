<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('jogos')->group(function () {
    Route::get('/', [AppController::class, 'index'])->name('jogos.index');
});

Route::fallback(function () {
    return 'Página não encontrada';
});