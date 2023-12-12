<?php

namespace App;

trait OfertaValor
{
    protected $nome;
    protected $valor;
    protected $custo;
    protected $preco;
    protected $descricao;

    protected function initializeOfertaValor() 
    {
        $this->nome = '';
        $this->descricao = '';
        $this->custo = 0;
        $this->preco = 0;
        $this->valor = 0;
    }

    protected static function bootOfertaValor()
    {
        static::boot();

        static::creating(function ($model) {
            $model->initializeOfertaValor();
        });

        static::updating(function ($model) {
            $model->initializeOfertaValor();
        });

        static::deleting(function ($model) {
            $model->initializeOfertaValor();
        });

        static::restoring(function ($model) {
            $model->initializeOfertaValor();
        });
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