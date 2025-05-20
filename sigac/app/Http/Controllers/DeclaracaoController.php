<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Declaracao;
use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Comprovante;

class DeclaracaoController extends Controller
{
    public function index(){
        $declaracoes = Declaracao::all();
        return view('declaracao.index')->with(['declaracoes' => $declaracoes]);
    }

    public function create(){
        $alunos = Aluno::all();
        $comprovantes = Comprovante::all();
        return view('declaracao.create', compact('alunos', 'comprovantes'));
    }

    public function store(Request $request){
        $hash = $request->hash;
        $data = $request->data;
        $aluno_id = $request->aluno_id;
        $comprovante_id = $request->comprovante_id;

        $declaracoes = new Declaracao();
        $declaracoes->hash = $hash;
        $declaracoes->data = $data;
        $declaracoes->aluno_id = $aluno_id;
        $declaracoes->comprovante_id = $comprovante_id;

        $declaracoes->save();

        return redirect()->route('declaracao.index')->with('success', 'Declaração criada com sucesso!');
    }
}
