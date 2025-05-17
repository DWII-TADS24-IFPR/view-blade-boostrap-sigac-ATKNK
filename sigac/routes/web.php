<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlunoController;
use App\Models\Aluno;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alunos/index', [AlunoController::class, 'index'])->name('aluno.index');
Route::post('/alunos', [AlunoController::class, 'store'])->name('aluno.store');
Route::get('alunos/create', [AlunoController::class, 'create'])->name('aluno.create');
