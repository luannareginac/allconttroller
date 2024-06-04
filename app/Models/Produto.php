<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'tabprodutosentrada';
    protected $primaryKey = 'idprodutosentrada';

    protected $fillable = [
        'descricao',
        'DataCompra',
        'valor',
        'qtd',
        'Ncategoria',
        'Observacao',
        'NunidadeMedida',
        'porcentagem_ganho',
        'valor_venda',
        'NFornecedor',
        'valortotalcompra',
        'CodigoProduto',
        'CodigoBarras'
    ];

    public $timestamps = false;

    public function categoria()
    {
        return $this->belongsTo(CategoriaProduto::class, 'Ncategoria');
    }

    public function unidadeMedida()
    {
        return $this->belongsTo(UnidadeMedida::class, 'NunidadeMedida');
    }

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class, 'NFornecedor');
    }
}
