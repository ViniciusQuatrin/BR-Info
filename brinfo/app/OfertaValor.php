<?php

namespace App;

abstract class OfertaValor
{
    protected $nome;
    protected $valor;
    protected $custo;
    protected $preco;
    protected $descricao;

    public function __construct($nome, $valor, $custo, $preco, $descricao)
    {
        $this->nome = $nome;
        $this->valor = $valor;
        $this->custo = $custo;
        $this->preco = $preco;
        $this->descricao = $descricao;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function getCusto()
    {
        return $this->custo;
    }

    public function setCusto($custo)
    {
        $this->custo = $custo;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
}