<?php

namespace App\Impostos;

use App\Orcamento;

class Icms implements Imposto
{
    public function calculaImposto(Orcamento $orcamento) : float
    {
        return $orcamento->valor * 0.1;
    }
}