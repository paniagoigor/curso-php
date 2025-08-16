<?php

$pesoPacote = readline("Qual o peso do pacote \n");
if($pesoPacote < 2){
echo"Pacote leve";
}else if ($pesoPacote >= 2){
    echo"Pacote pesado";
}else{
    echo"Valor invalido";
}