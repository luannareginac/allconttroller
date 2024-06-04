<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $table = 'tabvenda'; // Nome da tabela no banco de dados

    protected $primaryKey = 'idvendas'; // Nome da chave primária da tabela

    protected $fillable = [ // Campos que podem ser preenchidos em massa
        'NProdutoEntrada',
        'NCliente',
        'DataVenda',
        'Desconto',
        'qtd',
        'TotalVenda',
        'Observacao',
        'Descricao',
        'valorvendafinal',
        'valortotalvendas',
        'nvendedor',
        'NTipoPag',
        'CodigoProdutoVenda',
        'NUnidadeMedida',

    ];
    public $timestamps = false;
    public function produto()
    {
        return $this->belongsTo(Produto::class, 'NProdutoEntrada');
    }
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'NCliente');
    }
    public function vendedor()
    {
        return $this->belongsTo(Vendedor::class, 'nvendedor');
    }
    public function tipopag()
    {
        return $this->belongsTo(TipoPag::class, 'NTipoPag');
    }
    public function unidadeMedida()
    {
        return $this->belongsTo(UnidadeMedida::class, 'NUnidadeMedida');
    }
}
