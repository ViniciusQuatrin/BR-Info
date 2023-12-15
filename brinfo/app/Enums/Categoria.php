<?php

namespace App\Enums;

enum Categoria: string
{
    case Acessorios = "Acessorios";
    case Computadores = "Computadores";
    case Notebooks = "Notebooks";
    case Tablets = "Tablets";
    case Componentes = "Componentes";
    case Celulares = "Celulares";
    case Outros = "Outros";

    public static function values(): array
    {
        return [
            "Acessorios",
            "Computadores",
            "Notebooks",
            "Tablets",
            "Componentes",
            "Celulares",
            "Outros",
        ];
    }
    
}