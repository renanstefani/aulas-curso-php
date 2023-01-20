<?php

$veiculos = "Carro - Navio - Helicóptero - Motocicleta";

$veiculosArray = explode(" - ", $veiculos);

print_r($veiculosArray);

echo "<br>";

for($i = 0; $i <count($veiculosArray); $i++){
    echo "Veículo: $veiculosArray[$i] <br>";
}