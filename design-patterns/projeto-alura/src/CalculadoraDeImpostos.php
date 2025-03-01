<?php

namespace App;

use App\Impostos\Imposto;

class CalculadoraDeImpostos
{
    public function calcula(Orcamento $orcamento, Imposto $imposto): float 
    {   
        return $imposto->calculaImposto($orcamento); 
    }
}