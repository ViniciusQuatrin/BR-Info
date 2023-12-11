<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

abstract class OfertaValor extends Model
{
    protected $nome
    protected $custo;
    protected $preco;
    protected $valor;
    protected $descricao;
}
