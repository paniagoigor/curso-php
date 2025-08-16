<?php

function CalculaArea($lado){
    return $lado * $lado;
}

$lado = readline("Informe o comprimento do lado do quadrado: ");
$resultado = CalculaArea($lado);
echo "A área de um quadrado de lado $lado é: $resultado\n";