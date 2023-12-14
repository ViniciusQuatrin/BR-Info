<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Funcionario;
use App\Models\Cliente;
use App\Models\Produto;
use App\Models\Servico;

class Venda extends Model
{
    use HasFactory;

    protected $table = 'venda';

    protected $fillable = [
        'funcionario_id',
        'cliente_id',
        'produto_id',
        'servico_id',
        'data',
        'total',
        'forma_pagamento',
    ];

    protected $casts = [
        'data' => 'date',
    ];

    public function funcionario() { 
        return $this->belongsTo(Funcionario::class);
    }

    public function cliente() { 
        return $this->belongsTo(Cliente::class);
    }

    public function produto() {
        return $this->belongsTo(Produto::class);
    }

    public function servico() {
        return $this->belongsTo(Servico::class);
    }
}
