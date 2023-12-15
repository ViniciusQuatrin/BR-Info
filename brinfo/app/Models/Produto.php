<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\OfertaValor;
use App\Enums\Categoria;

class Produto extends Model
{
    use HasFactory, OfertaValor;

    protected $table = 'produto';

    protected $fillable = [
        'categorias',
    ];

    protected $casts = [
        'categorias' => Categoria::class
    ];

    public function __construct(array $attributes = [])
    { 
        parent::__construct($attributes);
        $this->initializeOfertaValor();
    }
}
