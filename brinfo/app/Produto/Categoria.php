<?php

namespace App\Produto;

enum Categoria: string
{
    case Acessorios = "acessórios";
    case Computadores = "computadores";
    case Notebooks = "notebooks";
    case Tablets = "tablets";
    case Componentes = "componentes";
    case Celulares = "celulares";
    case Outros = "outros";
}