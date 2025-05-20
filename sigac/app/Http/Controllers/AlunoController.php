<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Curso;
use App\Models\Turma;

class AlunoController extends Controller
{

    public function index(){
        $alunos = Aluno::all();
        return view('aluno.index')->with(['alunos' => $alunos]);
    }

    public function create()
    {
        $cursos = Curso::all();
        $turmas = Turma::all();
        return view('aluno.create', compact('cursos', 'turmas'));
    }

    public function store(Request $request)
    {
        $nome = $request->nome;
        $cpf = $request->cpf;
        $email = $request->email;
        $senha = $request->senha;
        $user_id = $request->user_id;
        $curso_id = $request->curso_id;
        $turma_id = $request->turma_id;

        $aluno = new Aluno();
        $aluno->nome = $nome;
        $aluno->cpf = $cpf;
        $aluno->email = $email;
        $aluno->senha = $senha;
        $aluno->user_id = $user_id;
        $aluno->curso_id = $curso_id;
        $aluno->turma_id = $turma_id;

        $aluno->save();

        return redirect()->route('aluno.index')->with('success', 'Aluno criado com sucesso!');
    }
}
