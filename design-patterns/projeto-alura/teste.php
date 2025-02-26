<?php

use \App\CalculadoraDeImpostos;
use App\Impostos\Icms;
use \App\Orcamento;

require 'vendor/autoload.php';

$calculadora = new  CalculadoraDeImpostos();
$orcamento =  new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento,  new Icms());