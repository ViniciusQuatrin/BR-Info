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
}