<?php

$num1 = readline("Informe o primeiro número: ");
$num2 = readline("Informe o segundo número: ");

function Somar($num1, $num2){
    $soma = $num1 + $num2;
    return $soma;
}

$soma = Somar($num1, $num2);
echo "O valor da soma é: $soma\n";