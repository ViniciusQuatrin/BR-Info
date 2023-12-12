<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\OfertaValor;
use App\Produto\Categoria;

class Produto extends OfertaValor
{
    use HasFactory;
    use OfertaValor;

    protected $table = 'produto';

    protected $fillable = [
        'codigo_produto',
        'categorias',
    ];

    protected Categoria $categorias;
}
