<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\Cargo;

class Funcionario extends Model
{
    use HasFactory;

    $table = 'funcionario';

    protected $fillable = [
        'num_cracha',
        'nome',
        'cargo',
        'salario',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
