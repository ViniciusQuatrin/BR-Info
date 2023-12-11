<?php

namespace App\Produto;

use App\OfertaValor;

class Produto extends OfertaValor
{
    private $id;
    private $codigoProduto;
    private Categoria $categorias;

    public function __construct($nome, $valor, $custo, $preco, $descricao, $codigoProduto, $categorias)
    {
        parent::__construct($nome, $valor, $custo, $preco, $descricao);
        $this->codigoProduto = $codigoProduto;
        $this->categorias = $categorias;
    }

    public function getCodigo()
    {
        return $this->codigoProduto;
    }

    public function setCodigo($codigo)
    {
        $this->codigoProduto = $codigo;
    }

    public function getCategorias()
    {
        return $this->categorias;
    }

    public function setCategorias($categorias)
    {
        $this->categorias = $categorias;
    }
}