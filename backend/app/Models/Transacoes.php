<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transacoes extends Model
{
    protected $fillable = [
        'descricao',
        'valor',
        'tipo',
    ];
}
