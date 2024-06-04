<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{

    protected $table = 'tabvendedor';
    protected $primaryKey = 'idvendedor';

    public $timestamps = false;
    protected $fillable = [
        'nome', 'endereco', 'telefone', 'email', 'cidade', 'estado', 'cep',
    ];
}
