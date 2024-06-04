<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Produto;
use App\Models\TipoPag;
use App\Models\UnidadeMedida;
use App\Models\Venda;
use App\Models\Vendedor;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    public function index()
    {
        $vendas = Venda::with(
            'produto',
            'cliente',
            'vendedor',
            'tipopag',
            'unidadeMedida'
        )->get();
        $clientes = Cliente::all();
        $vendedores = Vendedor::all();
        $tiposPagamento = TipoPag::all();
        $unidadesMedida = UnidadeMedida::all();
        $produtos = Produto::all();


        return view('vendas.lista', compact('vendas', 'clientes', 'vendedores', 'tiposPagamento', 'unidadesMedida', 'produtos'));
    }
    public function buscarcode(Request $request)
    {
        $codigoProduto = $request->input('codigoprodutovenda');
        $produto = Produto::where('CodigoProduto', $codigoProduto)->first();

        return response()->json($produto);
    }

    public function salvar(Request $request)
    {

        $venda = new Venda();
        $venda->NProdutoEntrada = $request->produto;
        $venda->NCliente = $request->cliente;
        $venda->NTipoPag = $request->tipopag;
        $venda->nvendedor = $request->vendedor;
        $venda->DataVenda = $request->datavenda;
        $venda->Desconto = $request->desconto;
        $venda->qtd = $request->qtd;
        $venda->Observacao = $request->Observacao;
        $venda->Descricao = $request->descricao;
        $venda->valorvendafinal = $request->valorvendafinal;
        $venda->valortotalvendas = $request->valortotalvendas;
        $venda->CodigoProdutoVenda = $request->codigoprodutovenda;
        $venda->NUnidadeMedida = $request->unidade;

        // Salve a venda no banco de dados
        $venda->save();

        // Redirecione de volta para a página de listagem de vendas ou exiba uma mensagem de sucesso
        return redirect()->route('vendas.lista')->with('success', 'Venda salva com sucesso.');
    }
}
