<?php

$str = "Testando o método strpos, com o strpos encontramos strings";

// strpos(string, string a ser encontrada)
// strpos vai retornar o índice da primeira ocorrencia do termo pesquisado (exemplo abaixo: 19)
$encontrarTeste = strpos($str, "strpos");

echo "$encontrarTeste <br>";


// Caso a string pesquisada não exista, será retornado false
$encontrarTeste2 = strpos($str, "inexistente");
echo "$encontrarTeste2 <br>";

if($encontrarTeste2 === false){
    echo "Palavra não encontrada! <br>";
}


$palavra = "encontramos";
$encontrarTeste3 = strpos($str, $palavra);

echo "$encontrarTeste3 <br>";

$palavra2 = "mé";
$encontrarTeste4 = strpos($str, $palavra2);

echo "$encontrarTeste4 <br>";