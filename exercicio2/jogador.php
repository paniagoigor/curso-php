<?php

$salario = 15000;

$nivel = readline("Informe o nivel do jogador entre 1 e 5 \n");

if ($nivel == 5){
    $salario =  $salario + ($salario * 0.15);
}
echo"O salario do jogador é: $salario \n";