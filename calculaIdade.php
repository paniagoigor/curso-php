<?php

$anoAtual = readline("Informe o ano atual: ");
$anoNascimento = readline("Informe seu ano de nascimento: ");

function calculaIdade($anoAtual, $anoNascimento) {
    $idade = $anoAtual - $anoNascimento;
    return $idade;
}

$idade = calculaIdade($anoAtual, $anoNascimento);
echo "sua idade é: $idade anos\n";