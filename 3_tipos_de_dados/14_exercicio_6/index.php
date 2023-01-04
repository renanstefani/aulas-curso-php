<?php

$carro = [
    'fabricante' => 'VW', 
    'modelo' => 'Fusca', 
    'ano' => 1975, 
    'cor' => 'Bege'
];

echo "<br>";
print_r($carro);
echo "<br>";

$modelo = $carro['modelo'];
$ano = $carro['ano'];

echo "O carro é do modelo $modelo, e seu ano é $ano.";
