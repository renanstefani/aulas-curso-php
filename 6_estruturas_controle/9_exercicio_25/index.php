<?php

$a = 10;
$b = 250;
$c = "Maria";

if(is_numeric($a)){
    $atr = $a * 2;

    if($atr > 100){
        echo "Valor de A maior que 100.";
    } else {
        echo "Valor de A menor que 100. <br>";
    }
} else {
    echo "A não é um valor numérico <br>";
}

if(is_numeric($b)){
    $atr = $b * 2;

    if($atr > 100){
        echo "Valor de B maior que 100. <br>";
    } else {
        echo "Valor de B menor que 100. <br>";
    }
} else {
    echo "B não é um valor numérico <br>";
}

if(is_numeric($c)){
    $atr = $c * 2;

    if($atr > 100){
        echo "Valor de C maior que 100. <br>";
    } else {
        echo "Valor de C menor que 100. <br>";
    }
} else {
    echo "C não é um valor numérico. <br>";
}