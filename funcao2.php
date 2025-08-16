<?php

$nome = readline("informe seu nome: ");
$idade = readline("Informe sua idade: ");

function informacoesPessoa($nome, $idade) {
    echo "Nome informado: $nome\n";
    echo "Idade informada: $idade\n";
    echo "Ano atual: 2025";
}

informacoesPessoa($nome, $idade);