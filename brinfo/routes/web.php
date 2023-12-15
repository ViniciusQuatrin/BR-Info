<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/venda', [VendaController::class, 'index'])->name('venda.index');

Route::get('/venda/create', [VendaController::class, 'create'])->middleware('auth')->name('venda.create');

Route::post('/venda/store', [VendaController::class, 'store'])->middleware('auth')->name('venda.store');

Route::delete('/venda/delete/{id}', [VendaController::class, 'destroy'])->middleware('auth')->name('venda.destroy');