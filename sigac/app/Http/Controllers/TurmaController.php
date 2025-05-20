<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Turma;
use App\Models\Curso;

class TurmaController extends Controller
{
    public function index(){
        $turmas = Turma::all();
        return view('turma.index')->with(['turmas' => $turmas]);
    }

    public function create(){
        $cursos = Curso::all();
        return view('turma.create', compact('cursos'));
    }

    public function store(Request $request){
        $ano = $request->ano;
        $curso_id = $request->curso_id;

        $turma = new Turma();
        $turma->ano = $ano;
        $turma->curso_id = $curso_id;

        $turma->save();

        return redirect()->route('turma.index')->with('success', 'Turma criada com sucesso!');
    }
}
