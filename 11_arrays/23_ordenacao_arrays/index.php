<?php

$array = [3, 55, 23, 645, 2, 126];

// Vai ornedar o array, alterando o original
sort($array);

print_r($array);
echo "<br>";

$array2 = [3, 55, 23, 645, 2, 126];

// Ordenando reverso
rsort($array2);

print_r($array2);
echo "<br>";

// Ordenando por ordem alfabética
$nome = ['Potter', 'James', 'Harry'];

sort($nome);

print_r($nome);
echo "<br>";
