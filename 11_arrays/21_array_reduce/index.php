<?php

$arr = [1, 2, 3, 4];

function soma($a, $b){
    return $a + $b;
}
// array_reduce(array, funcao)
// vai simular um loop inserindo os elementos do array como parametros da funcao
$resultado = array_reduce($arr, "soma");

echo "$resultado <br>";