<?php

// compact() faz o inverso do extract, transforma variaveis em chaves

$marca = 'VW';
$motor = "1.6";
$portas = 4;
$arCondicionado = true;

$carro = compact("marca", "motor", "portas", "arCondicionado");

print_r($carro);