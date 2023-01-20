<?php

$frase = "Teste de função explode";

// explode(delimitador, string)
$fraseArray = explode(" ", $frase);
print_r($fraseArray);

echo "<br>";

// No exemplo a seguir toda a string se torna um elemento
// Devido ao delimitador "," não existir na string
$fraseArray2 = explode(",", $frase);
print_r($fraseArray2);

echo "<br>";

$frase2 = "Carro, Barco, Navio, Moto";

$fraseArray3 = explode(",", $frase2);
print_r($fraseArray3);

echo "<br>";

for($i = 0; $i < count($fraseArray3); $i++){

    echo "$fraseArray3[$i] <br>";
}