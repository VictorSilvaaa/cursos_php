<?php

use App\CalculadoraDeDescontos;
use \App\CalculadoraDeImpostos;
use App\Impostos\Icms;
use \App\Orcamento;

require 'vendor/autoload.php';

// $calculadora = new  CalculadoraDeImpostos();
// $orcamento =  new Orcamento();
// $orcamento->valor = 100;

// echo $calculadora->calcula($orcamento,  new Icms());

$orcamento =  new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItens = 6;

$calculadoraDescontos = new CalculadoraDeDescontos();


echo $calculadoraDescontos->calculaDescontos($orcamento);

