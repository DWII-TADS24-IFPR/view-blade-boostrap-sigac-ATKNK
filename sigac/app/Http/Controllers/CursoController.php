<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Nivel;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        return view('curso.index')->with(['cursos' => $cursos]);
    }

    public function create()
    {
        $niveis = Nivel::all();
        return view('curso.create', compact('niveis'));
    }

    public function store(Request $request){
        $nome = $request->nome;
        $sigla = $request->sigla;
        $total_horas = $request->total_horas;
        $nivel_id = $request->nivel_id;

        $curso = new Curso();
        $curso->nome = $nome;
        $curso->sigla = $sigla;
        $curso->total_horas = $total_horas;
        $curso->nivel_id = $nivel_id;

        $curso->save();

        return redirect()->route('curso.index')->with('success', 'Curso criado com sucesso!');
    } 
}
