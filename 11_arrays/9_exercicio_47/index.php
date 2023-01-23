<?php

$carro = ["Jaguar", 3.0, "azul", 18, "Teto solar", "automático"];

print_r($carro);

echo "<br>";

list($modelo, $motor, $cor, $fabricacao, $versao, $transmissao) = $carro;

echo "$modelo <br>";
echo "$motor <br>";
echo "$cor <br>";
echo "$fabricacao <br>";
echo "$versao <br>";
echo "$transmissao <br>";