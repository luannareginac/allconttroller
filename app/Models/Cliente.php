<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'tabcliente';
    protected $primaryKey = 'idcliente';

    public $timestamps = false;
    protected $fillable = [
        'nome', 'endereco', 'cidade', 'estado', 'cep', 'telefone', 'email'
    ];
}
