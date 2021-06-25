<?php

$peso = 62;
$altura = 1.77;
$imc = $peso / $altura ** 2;

echo "IMC = $imc". PHP_EOL;

if ($imc < 18.5) {
    echo "está abaixo do recomendado";
} elseif ($imc < 25) {
    echo "é o recomendado";
} else {
    echo "está acimda do recomendado";
}

