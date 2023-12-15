<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\ProdutoController;

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

Route::middleware('auth')->group(function () {
    Route::get('/venda', [VendaController::class, 'index'])->name('venda.index');
    Route::get('/venda/create', [VendaController::class, 'create'])->name('venda.create');
    Route::post('/venda/store', [VendaController::class, 'store'])->name('venda.store');
    Route::delete('/venda/delete/{id}', [VendaController::class, 'destroy'])->name('venda.destroy');
});

// Route::middleware('auth')->group(function () {

// });

Route::get('/produto', [ProdutoController::class, 'index'])->name('produto.index');
Route::get('/produto/create', [ProdutoController::class, 'create'])->name('produto.create');
Route::post('/produto/store', [ProdutoController::class, 'store'])->name('produto.store');
Route::delete('/produto/delete/{id}', [ProdutoController::class, 'destroy'])->name('produto.destroy');