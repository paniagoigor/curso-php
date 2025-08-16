<?php

$cupomDigitado = readline("Digite aqui seu cupom de desconto: \n");
if($cupomDigitado != "PROMO10"){
    echo"Código invalido";
}else{
    echo"Você ganhou 10% de Desconto";
}