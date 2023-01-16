<?php

function soma($n1, $n2){

    return $n1 + $n2;
}
echo "<br>";

echo soma(2, 3) . "<br>";

$x = soma(3, 5);

echo $x . "<br>";

$y = soma($x, 20);

echo $y . "<br>";

function testeRetorno(){
    return "Testando";
}

$z = testeRetorno();

echo $z . "<br>";