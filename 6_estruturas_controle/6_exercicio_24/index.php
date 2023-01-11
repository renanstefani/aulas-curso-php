<?php

$a = "Renan";
$b = 58;
$c = false;

$alerta1 = "é um número inteiro. <br>";
$alerta2 = "não é um número inteiro. <br>";

if(is_int($a)){
    echo $a . " " . $alerta1;
} else {
    echo $a . " " . $alerta2;
}


if(is_int($b)){
    echo $b . " " . $alerta1;
} else {
    echo $b . " " . $alerta2;
}


if(is_int($c)){
    echo $c . " " . $alerta1;
} else {
    echo $c . " " . $alerta2;
}