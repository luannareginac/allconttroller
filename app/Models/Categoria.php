<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'tabcategoriaprodutos';
    protected $primaryKey = 'idcategoriaprodutos';

    public $timestamps = false;
    protected $fillable = [
        'descricao'
    ];
}
