<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('cliente.lista', compact('clientes'));
    }
    public function salvar(Request $request)
    {

        $clientes = new Cliente();
        $clientes->nome = $request->nome;
        $clientes->endereco = $request->endereco;
        $clientes->cidade = $request->cidade;
        $clientes->estado = $request->estado;
        $clientes->cep = $request->cep;
        $clientes->telefone = $request->telefone;
        $clientes->email = $request->email;
        $clientes->save();
        return redirect()->route('cliente.lista')->with('success', 'fornecedores salvo com sucesso.');
    }
    public function remover($id)
    {
        $clientes = Cliente::findOrFail($id);
        $clientes->delete();
        return redirect()->route('cliente.lista')->with('success', 'Cliente excluído com sucesso.');
    }
}
