<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comprovante;
use App\Models\Aluno;
use App\Models\Categoria;

class ComprovanteController extends Controller
{
    public function index()
    {
        $comprovantes = Comprovante::all();
        return view('comprovante.index')->with(['comprovantes' => $comprovantes]);
    }

    public function create(){
        $alunos = Aluno::all();
        $categorias = Categoria::all();
        return view('comprovante.create', compact('alunos', 'categorias'));
    }

    public function store(Request $request){
        $horas = $request->horas;
        $atividade = $request->atividade;
        $categoria_id = $request->categoria_id;
        $aluno_id = $request->aluno_id;
        $user_id = $request->user_id;

        $comprovante = new Comprovante();
        $comprovante->horas = $horas;
        $comprovante->atividade = $atividade;
        $comprovante->categoria_id = $categoria_id;
        $comprovante->aluno_id = $aluno_id;
        $comprovante->user_id = $user_id;

        $comprovante->save();

        return redirect()->route('comprovante.index')->with('success', 'Comprovante criado com sucesso!');
    }
}
