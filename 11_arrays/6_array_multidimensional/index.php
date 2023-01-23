<?php

$arr = [
    [1, 2 ,3 , 4],
    [10, 20, 30]
];

print_r($arr);
echo "<br>";

// Acessando o segundo elemento do array no indice 0
echo $arr[0][1] . "<br>";

// Acessando o terceiro elemento do array no indice 1
echo $arr[1][2] . "<br>";

echo count($arr) . "<br>";
echo count($arr[0]) . "<br>";