<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = Fornecedor::all();
        return view('fornecedor.lista', compact('fornecedores'));
    }

    public function salvar(Request $request)
    {


        $fornecedores = new Fornecedor();
        $fornecedores->nome = $request->nome;
        $fornecedores->endereco = $request->endereco;
        $fornecedores->cidade = $request->cidade;
        $fornecedores->estado = $request->estado;
        $fornecedores->cep = $request->cep;
        $fornecedores->telefone = $request->telefone;
        $fornecedores->email = $request->email;
        $fornecedores->save();

        return redirect()->route('fornecedores.lista')->with('success', 'fornecedores salvo com sucesso.');
    }

    public function remover($id)
    {
        $fornecedores = Fornecedor::findOrFail($id);
        $fornecedores->delete();

        return redirect()->route('fornecedores.lista')->with('success', 'Produto excluído com sucesso.');
    }
}
