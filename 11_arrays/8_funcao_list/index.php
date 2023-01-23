<?php

$pessoa = ["John", 25, "Programador", "ativo"];

print_r($pessoa);

echo "<br>";

list($nome, $idade, $profissao, $status) = $pessoa;

echo "$nome <br>";
echo "$idade <br>";
echo "$profissao <br>";
echo "$status <br>";