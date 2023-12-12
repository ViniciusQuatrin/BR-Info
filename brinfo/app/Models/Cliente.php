<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    $fillable = [
        'nome',
        'email',
        'cpf',
        'data_nascimento',
        'num_cadastro',
    ];

    
}
