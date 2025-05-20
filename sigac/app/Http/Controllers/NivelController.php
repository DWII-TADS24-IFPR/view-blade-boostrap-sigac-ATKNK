<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Nivel;
use Illuminate\Http\Request;

class NivelController extends Controller
{
    public function index(){
        $niveis = Nivel::all();
        return view('nivel.index')->with(['niveis' => $niveis]);
    }

    public function create(){
        return view('nivel.create');
    }

    public function store(Request $request){
        $nome = $request->nome;

        $nivel = new Nivel();
        $nivel->nome = $nome;

        $nivel->save();

        return redirect()->route('nivel.index')->with('success', 'Nivel criado com sucesso!');
    }
}
