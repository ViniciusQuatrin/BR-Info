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
        Schema::create('venda', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('funcionario_id');
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('produto_id')->default(null)->nullable();
            $table->unsignedBigInteger('servico_id')->default(null)->nullable();
            $table->foreign('funcionario_id')->references('id')->on('funcionario');
            $table->foreign('cliente_id')->references('id')->on('cliente');
            $table->foreign('produto_id')->references('id')->on('produto'); 
            $table->foreign('servico_id')->references('id')->on('servico');
            $table->date('data');
            $table->float('valor');
            $table->enum('forma_pagamento', ['credito', 'debito', 'dinheiro', 'pix', 'boleto', 'transferencia']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venda');
    }
};
