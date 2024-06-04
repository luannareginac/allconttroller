<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaProduto extends Model
{
    protected $table = 'tabcategoriaprodutos';

    protected $primaryKey = 'idcategoriaprodutos';

    protected $fillable = [
        'descricao',
    ];


    public $timestamps = false;

    public function produtos()
    {
        return $this->hasMany(Produto::class, 'Ncategoria');
    }
}
