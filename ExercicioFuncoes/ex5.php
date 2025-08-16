<?php

function Verifica($num){
    if($num % 2 == 0)
        echo "$num é par\n";
    else{
        echo "$num é ímpar\n";
    }
}

$num = readline("Informe um valor: ");
Verifica($num);  