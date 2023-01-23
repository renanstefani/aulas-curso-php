<?php

// array_reverse() não altera o original

$arr = [1, 2, 3, 4, 5];

$arrReverse = array_reverse($arr);

print_r($arr);
echo "<br>";

print_r($arrReverse);
echo "<br>";

// Funciona em qualquer tipo de dado:
$arr2 = ['Renan', 40, false, [2, 7, 3]];

$arr2Reverse = array_reverse($arr2);

print_r($arr2);
echo "<br>";

print_r($arr2Reverse);
echo "<br>";