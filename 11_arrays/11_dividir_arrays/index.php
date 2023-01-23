<?php

$arr = range(1, 20);

print_r(array_chunk($arr, 4));

echo "<br>";

$listaArrays = array_chunk($arr, 10);

print_r($listaArrays);

echo "<br>";

print_r($listaArrays[1]);