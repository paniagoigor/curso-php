<?php

function ValidaIdade($idade){
    if($idade >= 18){
        return true;
    }else{
        return false;
    }
}

$idade = readline("Informe a sua idade: ");
$resultado = ValidaIdade($idade);

if($resultado == true){
    echo "Pode Votar\n";
}else{
    echo "Não Pode Votar\n";
}
