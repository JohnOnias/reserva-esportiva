<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\EquipamentoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AlunoController::class, 'telaLogin']) ->name('telaLogin');
Route::get('/create', [AlunoController::class, 'telaCadastro']) ->name('telaCadastro');
Route::get('/home', [EquipamentoController::class, 'telaEquipamentos'])->name('telaEquipamentos');
Route::get('/home', [EquipamentoController::class, 'listarEquipamentos']);

Route::post('/', [AlunoController::class, 'validar'])->name('validate');
Route::post('/create', [AlunoController::class, 'cadastrar'])->name('cadastro');





