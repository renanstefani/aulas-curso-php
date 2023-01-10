<?php

// realizando a conversão
echo "<br>";
$a = (int) "15";
echo $a;

echo "<br>";

if($a === 15){
    echo "A conversão foi realizada e o valor passado como string agora é um valor inteiro";
}

echo "<br>";

$b = (float) "2.546";

if($b === 2.546){
    echo "Valor de B convertido";
}

echo "<br>";

$c = (string) 33;

if($c === "33"){
    echo "Realizada conversão de C para string.";
}

if($c === 33){ // false
    echo "C é um valor inteiro.";
}