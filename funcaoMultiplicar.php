<?php

function Multiplicar($num1, $num2, $num3){
    $resultado = $num1 * $num2 * $num3;
    return $resultado;
}

$num1 = readline("Informe o primeiro valor: ");
$num2 = readline("Informe o segundo valor: ");
$num2 = readline("Informe o terceiro valor: ");

$resultado =  Multiplicar($num1, $num2, $num3);
echo "O resultado da multiplicação é: $resultado\n";