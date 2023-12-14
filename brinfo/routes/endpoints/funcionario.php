<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionarioController;

Route::get('/', [FuncionarioController::class, 'index'])->middleware('auth')->name('funcionarios.index');

Route::get('/create', [FuncionarioController::class, 'create'])->middleware('auth')->name('funcionarios.create');

Route::post('/store', [FuncionarioController::class, 'store'])->middleware('auth')->name('funcionarios.store');

Route::get('/edit/{id}', [FuncionarioController::class, 'edit'])->middleware('auth')->name('funcionarios.edit');

Route::put('/update/{id}', [FuncionarioController::class, 'update'])->middleware('auth')->name('funcionarios.update');

Route::delete('/destroy/{id}', [FuncionarioController::class, 'destroy'])->middleware('auth')->name('funcionarios.destroy');