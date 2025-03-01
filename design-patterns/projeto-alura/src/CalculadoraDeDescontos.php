<?php

namespace App;

use App\Descontos\DescontoMaisDe500Reais;
use App\Descontos\DescontoMaisDe5Itens;
use App\Descontos\SemDesconto;

class CalculadoraDeDescontos
{
    public function calculaDescontos(Orcamento $orcamento): float 
    {   
        $cadeiaDescontos = new DescontoMaisDe5Itens(
            new DescontoMaisDe500Reais(
                new SemDesconto()
            )
        );

        return $cadeiaDescontos->calculaDesconto($orcamento);
    }
}