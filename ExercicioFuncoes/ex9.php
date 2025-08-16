<?php

function ConverteValor($valorReal, $cotacaoDolar){
    return $valorReal / $cotacaoDolar;
}

$valorReal = readline("Informe o valor em reais: R$");
$cotacaoDolar = 5.00;
$resultado = ConverteValor($valorReal, $cotacaoDolar);
echo "R$" . $valorReal . " equivalem a $" . $resultado . " dólares";

