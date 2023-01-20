<?php

$str = "Isso é um teste de resto de string, vamos utilizar o strstr()";

$resto = strstr($str, "resto");

echo "$resto <br>";

$palavra = "um";

$resto2 = strstr($str, $palavra);

echo "$resto2 <br>";

if(strstr($str, ".NET") === false){
    echo "String não encontrada";
}