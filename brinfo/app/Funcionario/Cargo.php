<?php

namespace App\Funcionario;

enum Cargo: string
{
    case SysAdmin = 'SysAdmin';
    case Gerente = 'Gerente';
    case Supervisor = 'Supervisor';
    case Tecnico = 'Tecnico';
    case Analista = 'Analista';
    case Estagiario = 'Estagiario';


    public static function asArray(): array
    {
        return [
            self::SysAdmin => 'SysAdmin',
            self::Gerente => 'Gerente',
            self::Supervisor => 'Supervisor',
            self::Tecnico => 'Tecnico',
            self::Analista => 'Analista',
            self::Estagiario => 'Estagiario',
        ];
    }
}