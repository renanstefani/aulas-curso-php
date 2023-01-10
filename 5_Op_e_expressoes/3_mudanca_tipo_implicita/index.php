<?php

echo "<br>";
echo 5 / 2;
echo "<br>";

if(is_float(5 / 2)){
    echo "É float <br>";
}

echo 2 . 3;
echo "<br>";
if(is_string(2 . 3)){
    echo "É uma string";
}
echo "<br>";

$nome = "Renan";
$sobrenome = "Stefani";

$nomeCompleto = $nome . " " . $sobrenome;
echo $nomeCompleto;
echo "<br>";