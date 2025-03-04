<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

Route::get('/', function () {
    return redirect()->route('jogos.index');
});

Route::prefix('jogos')->group(function () {
    Route::get('/', [AppController::class, 'index'])->name('jogos.index');
    Route::get('/create', [AppController::class, 'create'])->name('jogos.create');
    Route::post('/', [AppController::class, 'store'])->name('jogos.store');
    Route::get('/{jogo}/edit', [AppController::class, 'edit'])->name('jogos.edit');
    Route::put('/{jogo}', [AppController::class, 'update'])->name('jogos.update');
    Route::delete('/{jogo}', [AppController::class, 'destroy'])->name('jogos.destroy');
});

Route::fallback(function () {
    return 'Página não encontrada';
});