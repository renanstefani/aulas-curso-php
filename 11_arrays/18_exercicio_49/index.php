<?php

$especie = "Hiena-malhada";
$altura = "92cm";
$comprimento = "170cm";
$idade = 12;

$animal = compact("especie", "altura", "comprimento", "idade");

print_r($animal);

echo "<br>";

for($i = 0; $i < count($animal); $i++){
    $chaves = array_keys($animal);
    $valores = array_values($animal);

    echo "$chaves[$i]: $valores[$i] <br>";
}

echo "<br>";

// Execução do instrutor:
// foreach tornou o código mais limpo

$raca = "Vira lata";
$nome = "Tuca";
$idade = 3;
$cor = "Caramelo";

$tuca = compact("raca", "nome", "idade", "cor");

print_r($tuca);
echo "<br>";

// foreach($itens as $key => $value) {}
foreach($tuca as $caracteristica => $value) {
    echo "$caracteristica: $value <br>";
}