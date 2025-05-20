<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Documento;
use App\Models\Categoria;

class DocumentoController extends Controller
{
    public function index(){
        $documentos = Documento::all();
        return view('documento.index')->with(['documentos' => $documentos]);
    }

    public function create(){
        $categorias = Categoria::all();
        return view('documento.create', compact('categorias'));
    }

    public function store(Request $request){
        $url = $request->url;
        $descricao = $request->descricao;
        $horas_in = $request->horas_in;
        $status = $request->status;
        $comentario = $request->comentario;
        $horas_out = $request->horas_out;
        $categoria_id = $request->categoria_id;
        $user_id = $request->user_id;

        $documento = new Documento();
        $documento->url = $url;
        $documento->descricao = $descricao;
        $documento->horas_in = $horas_in;
        $documento->status = $status;
        $documento->comentario = $comentario;
        $documento->horas_out = $horas_out;
        $documento->categoria_id = $categoria_id;
        $documento->user_id = $user_id;

        $documento->save();

        return redirect()->route('documento.index')->with('success', 'Documento criado com sucesso!');
    }
}
