<?php

$arr = [
    'John' => 30,
    'Mary' => 28,
    'James' => 19,
    'Peter' => 23
];

// Ordenando valores de forma crescente
asort($arr);

print_r($arr);
echo "<br>";


$arr2 = [
    'John' => 30,
    'Mary' => 28,
    'James' => 19,
    'Peter' => 23
];

// Ordenando valores de forma decrescente
arsort($arr2);

print_r($arr2);
echo "<br>";



// Ordenando por chaves ksort() ordem crescente
ksort($arr2);

print_r($arr2);
echo "<br>";

// krsort() ordem decrescente
krsort($arr2);

print_r($arr2);
echo "<br>";