<?php

$string = "Isso é uma string.";

// substr(string pai, indice inicial, comprimento da palvra)
$minha = substr($string, 12, 6);

echo $sting . "<br>";
echo $minha . "<br>";


$segundaString = "Testando esta string";

// Se omitirmos o segundo parâmetro, o corte é feito até o fim da string
$novaString = substr($segundaString, 8);
echo $novaString . "<br>";

// Comprimento negativo = remove do último indice até o valor negativo
$novaString2 = substr($segundaString, 8, -4);
echo $novaString2 . "<br>";
