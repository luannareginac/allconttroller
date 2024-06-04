<?php

namespace App\Http\Controllers;

use App\Models\Vendedor;
use Illuminate\Http\Request;

class VendedorController extends Controller
{
    public function index()
    {
        $vendedores = Vendedor::all();
        return view('vendedor.lista', compact('vendedores'));
    }
    public function salvar(Request $request)
    {

        $vendedores = new Vendedor();
        $vendedores->nome = $request->nome;
        $vendedores->endereco = $request->endereco;
        $vendedores->cidade = $request->cidade;
        $vendedores->estado = $request->estado;
        $vendedores->cep = $request->cep;
        $vendedores->telefone = $request->telefone;
        $vendedores->email = $request->email;
        $vendedores->save();
        return redirect()->route('vendedor.lista')->with('success', 'fornecedores salvo com sucesso.');
    }
    public function remover($id)
    {
        $vendedores = Vendedor::findOrFail($id);
        $vendedores->delete();
        return redirect()->route('vendedor.lista')->with('success', 'Cliente excluído com sucesso.');
    }
}
