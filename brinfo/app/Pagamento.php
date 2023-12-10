<?php

namespace App;

enum Pagamento: string
{
    case CREDITO = 'credito';
    case DEBITO = 'debito';
    case DINHEIRO = 'dinheiro';
    case PIX = 'pix';
    case BOLETO = 'boleto';
    case TRANSFERENCIA = 'transferencia';
}