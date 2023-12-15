<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendaController;

Route::get('/venda', [VendaController::class, 'index'])->name('venda.index');

Route::get('/venda/create', [VendaController::class, 'create'])->middleware('auth')->name('venda.create');

Route::post('/venda/store', [VendaController::class, 'store'])->middleware('auth')->name('venda.store');

Route::delete('/venda/delete/{id}', [VendaController::class, 'destroy'])->middleware('auth')->name('venda.destroy');