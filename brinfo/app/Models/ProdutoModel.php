<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\OfertaValor;

class Produto extends OfertaValor
{
    use HasFactory;
    use OfertaValor;

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
