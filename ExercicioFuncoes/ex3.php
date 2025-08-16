<?php

function AnoNascimento($idade, $anoAtual){
    return $anoAtual - $idade;
}

$idade = readline("Informe a sua idade: ");
$anoAtual = readline("Informe o ano atual: ");

echo "Seu ano de nascimento é: " . AnoNascimento($idade, $anoAtual);
