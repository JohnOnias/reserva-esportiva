<?php

use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('/index');
})->name('view.index');

Route::get('/create', [AlunoController::class, 'create']);

Route::post('/create', [AlunoController::class, 'store'])->name('cadastro');



