<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return view('categoria.lista', compact('categorias'));
    }

    public function salvar(Request $request)
    {

        $categorias = new Categoria();
        $categorias->descricao = $request->descricao;

        $categorias->save();
        return redirect()->route('categoria.lista')->with('success', 'Categorias salva com sucesso.');
    }
    public function remover($id)
    {
        $categorias = Categoria::findOrFail($id);
        $categorias->delete();
        return redirect()->route('categoria.lista')->with('success', 'Categoria excluído com sucesso.');
    }
}
