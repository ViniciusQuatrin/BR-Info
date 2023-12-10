<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produto', function (Blueprint $table) {
            $table->id();
            
            $table->string('nome');
            $table->string('descricao');
            $table->float('valor_liquido');
            $table->float('preco');
            $table->float('custo');
            $table->enum ('categoria', ['Acessorios', 'Computadores', 'Notebooks', 'Tablets', 'Componentes', 'Celulares', 'Outros']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produto');
    }
};
