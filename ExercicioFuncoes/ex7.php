<?php

function RetornaMaior($num1, $num2){
    if($num1 > $num2){
        return $num1;
    }else{
        return $num2;
    }
}

$num1 = readline("Informe o primeiro valor: ");
$num2 = readline("Informe o segundo valor: ");
$resultado = RetornaMaior($num1, $num2);

echo "O maior valor é: $resultado\n";


