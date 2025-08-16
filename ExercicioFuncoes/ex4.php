<?php

function Tabuada($num){
    for($i = 0; $i <= 10; $i++){
        echo "$num x $i = " . $num * $i . PHP_EOL;
    }

}

$num = readline("Informe um valor: ");
Tabuada($num);

