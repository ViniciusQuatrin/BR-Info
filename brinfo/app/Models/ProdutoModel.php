<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use .\Models\OfertaValor;

class Produto extends OfertaValor
{
    use HasFactory;

    protected $table = 'produto';

    protected $fillable = [
        'nome',
        'preco',
        'custo',
        'valor_liquido',
        'descricao',
        'codigo_produto',
        'categorias'
    ];
    
}
