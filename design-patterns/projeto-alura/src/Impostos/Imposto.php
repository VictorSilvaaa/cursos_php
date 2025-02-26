<?php

namespace App\Impostos;

use App\Orcamento;

Interface Imposto
{
    public function calculaImposto(Orcamento $orcamento) : float;
}