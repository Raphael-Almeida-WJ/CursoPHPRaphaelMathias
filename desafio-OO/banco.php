<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$raphael = new Titular(new CPF('170.267.444-44'), 'Raphael Mathias');
$conta = new Conta($raphael);
$conta->deposita(500);
$conta->saca(300); 

echo $conta->getNomeTitular() . PHP_EOL;
echo $conta->getCpfTitular() . PHP_EOL;
echo $conta->recuperaSaldo() . PHP_EOL;

echo Conta::recuperaNumeroDeContas();
