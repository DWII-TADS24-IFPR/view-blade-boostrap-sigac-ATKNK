<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ComprovanteController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\DeclaracaoController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\NivelController;
use App\Http\Controllers\TurmaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('alunos/index', [AlunoController::class, 'index'])->name('aluno.index');
Route::post('alunos', [AlunoController::class, 'store'])->name('aluno.store');
Route::get('alunos/create', [AlunoController::class, 'create'])->name('aluno.create');
Route::get('alunos/{id}', [AlunoController::class, 'show'])->name('aluno.show');

Route::get('categorias/index', [CategoriaController::class, 'index'])->name('categoria.index');
Route::post('categorias', [CategoriaController::class, 'store'])->name('categoria.store');
Route::get('categorias/create', [CategoriaController::class, 'create'])->name('categoria.create');
Route::get('categorias/{id}', [CategoriaController::class, 'show'])->name('categorias.show');

Route::get('comprovantes/index', [ComprovanteController::class, 'index'])->name('comprovante.index');
Route::post('comprovantes', [ComprovanteController::class, 'store'])->name('comprovante.store');
Route::get('comprovantes/create', [ComprovanteController::class, 'create'])->name('comprovante.create');
Route::get('comprovantes/{id}', [ComprovanteController::class, 'show'])->name('comprovante.show');

Route::get('cursos/index', [CursoController::class, 'index'])->name('curso.index');
Route::post('cursos', [CursoController::class, 'store'])->name('curso.store');
Route::get('cursos/create', [CursoController::class, 'create'])->name('curso.create');
Route::get('cursos/{id}', [CursoController::class, 'show'])->name('curso.show');

Route::get('declaracoes/index', [DeclaracaoController::class, 'index'])->name('declaracao.index');
Route::post('declaracoes', [DeclaracaoController::class, 'store'])->name('declaracao.store');
Route::get('declaracoes/create', [DeclaracaoController::class, 'create'])->name('declaracao.create');
Route::get('declaracoes/{id}', [DeclaracaoController::class, 'show'])->name('declaracao.show');

Route::get('documentos/index', [DocumentoController::class, 'index'])->name('documento.index');
Route::post('documentos', [DocumentoController::class, 'store'])->name('documento.store');
Route::get('documentos/create', [DocumentoController::class, 'create'])->name('documento.create');
Route::get('documentos/{id}', [DocumentoController::class, 'show'])->name('documento.show');

Route::get('niveis/index', [NivelController::class, 'index'])->name('nivel.index');
Route::post('niveis', [NivelController::class, 'store'])->name('nivel.store');
Route::get('niveis/create', [NivelController::class, 'create'])->name('nivel.create');
Route::get('niveis/{id}', [NivelController::class, 'show'])->name('nivel.show');

Route::get('turmas/index', [TurmaController::class, 'index'])->name('turma.index');
Route::post('turmas', [TurmaController::class, 'store'])->name('turma.store');
Route::get('turmas/create', [TurmaController::class, 'create'])->name('turma.create');
Route::get('turmas/{id}', [TurmaController::class, 'show'])->name('turma.show');

