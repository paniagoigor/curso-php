<?php

function Soma($num1, $num2){
    return $num1 + $num2;
}

$num1 = readline("Informe o primeiro valor: ");
$num2 = readline("Informe o segundo valor: ");

$resultado = Soma($num1, $num2);

echo "O resultado da soma é: $resultado\n";