<?php

$carro = [
    'marca' => 'VW',
    'motor' => '2.0',
    'teto solar' => true,
    'transmissao' => 'manual',
    'portas' => 4
];

$chaves = array_keys(($carro));

print_r($chaves);

echo "<br>";

$valores = array_values($carro);
print_r($valores);
