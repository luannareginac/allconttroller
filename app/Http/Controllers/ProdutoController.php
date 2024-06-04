<?php

namespace App\Http\Controllers;

use App\Models\CategoriaProduto;
use App\Models\Fornecedor;
use App\Models\UnidadeMedida;
use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::with('unidadeMedida', 'fornecedor', 'categoria')->get();
        $unidadesDeMedida = UnidadeMedida::all();
        $fornecedor = Fornecedor::all();
        $categorias = CategoriaProduto::all();

        return view('produtos.lista', compact('produtos', 'unidadesDeMedida', 'fornecedor', 'categorias'));
    }
    public function salvar(Request $request)
    {


        $produto = new Produto();
        $produto->descricao = $request->descricao;
        $produto->DataCompra = $request->DataCompra;
        $produto->valor = $request->valor;
        $produto->qtd = $request->qtd;
        $produto->Ncategoria = $request->categoria;
        $produto->Observacao = $request->Observacao;
        $produto->NunidadeMedida = $request->unidade;
        $produto->porcentagem_ganho = $request->porcentagem_ganho;
        $produto->valor_venda = $request->valor_venda;
        $produto->NFornecedor = $request->fornecedor;
        $produto->valortotalcompra = $request->valortotalcompra;
        $produto->CodigoProduto = $request->CodigoProduto;
        $produto->CodigoBarras = $request->CodigoBarras;

        $produto->save();

        return redirect()->route('produtos.lista')->with('success', 'Produto salvo com sucesso.');
    }


    public function remover($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return redirect()->route('produtos.lista')->with('success', 'Produto excluído com sucesso.');
    }
}
