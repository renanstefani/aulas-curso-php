<?php

// Resgatar elementos de array
// Remover elementos

$arr = [10, 20, 30, 40, 50, 60, 70, 80, 100];

// array_splice(array, elemento inicial, quantidade de elementos)
$remocao = array_splice($arr, 1, 2);

print_r($arr);
echo "<br>";

print_r($remocao);
echo "<br>";

$arr2 = [10, 20, 30, 40, 50, 60, 70, 80, 100];

$remocao2 = array_splice($arr2, 3);

print_r($arr2);
echo "<br>";

print_r($remocao2);
echo "<br>";

$arr3 = [10, 20, 30, 40, 50, 60, 70, 80, 100];

$remocao3 = array_splice($arr3, 1, -1);

print_r($arr3);
echo "<br>";

print_r($remocao3);
echo "<br>";
