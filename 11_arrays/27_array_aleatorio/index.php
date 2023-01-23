<?php

$arrayExemplo = range(1, 15);

// shuffle() ordena de forma aleatória
// o original é alterado no processo!
shuffle($arrayExemplo);

print_r($arrayExemplo);
echo "<br>";

shuffle($arrayExemplo);

print_r($arrayExemplo);
echo "<br>";