<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\OfertaValor;
use App\Enums\Categoria;

class Produto extends Model
{
    use HasFactory, OfertaValor;

    public function __construct(array $attributes = [])
    { 
        parent::__construct($attributes);
        $this->initilizeOfertaValor();
    }

    protected $table = 'produto';

    protected $fillable = [
        'codigo_produto',
        'categorias',
    ];

    protected $casts = [
        'categorias' => 'enumerated',
    ];

    
}
