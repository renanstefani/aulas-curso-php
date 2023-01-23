<?php

$arr = [
    'cor' => 'azul',
    'forma' => 'retangular',
    'material' => 'ferro'
];

// extract() cria variáveis utilizando chaves e valores declarados em array associativos
extract($arr);

echo $cor . "<br>";
echo $forma . "<br>";
echo $material . "<br>";

$nome = "John";

$cliente = [
    'nome' => 'James',
    'idade' => 29
];

echo $nome . "<br>";

extract($cliente);

echo $nome . "<br>";
echo $idade . "<br>";