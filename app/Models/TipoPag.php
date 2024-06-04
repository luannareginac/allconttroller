<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPag extends Model
{

    protected $table = 'tabtipopag';

    protected $primaryKey = 'idtipopag';

    protected $fillable = [
        'descricao', 'Data'
    ];
    public $timestamps = false;
}
