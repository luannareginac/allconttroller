<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnidadeMedida extends Model
{
    protected $table = 'tabunidadedemedida';

    protected $primaryKey = 'idunidademedida';

    protected $fillable = [
        'descricao',
    ];

    public $timestamps = false;

    public function produtos()
    {
        return $this->hasMany(Produto::class, 'NunidadeMedida');
    }
}
