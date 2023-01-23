<?php

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// array_slice(array, inicio, qtde de indices)
$slice1 = array_slice($arr, 1, 4);
print_r($slice1);

echo "<br>";

$slice2 = array_slice($arr, 4, 3);
print_r($slice2);

echo "<br>";

// Caso omitido o indice final, será recortado até o fim da array
$slice3 = array_slice($arr, 2);
print_r($slice3);

echo "<br>";

// Caso o o valor final seja negativo, será recortado o valor antes do fim do array
// Exemplo abaixo = [5, 6, 7, 8]
$slice4 = array_slice($arr, 4, -2);
print_r($slice4);
