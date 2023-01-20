<?php
echo "<br>";

$frase = "Testando encontro da palavra teste, em uma string que possui teste";

// strrpos(string, termo para busca)
// retorna o índice da última ocorrencia do termo dentro da string
$palavra = strrpos($frase, "teste");
echo "$palavra <br>";

$palavra2 = strrpos($frase, "Testando");
echo "$palavra2 <br>";

if(strrpos($frase, "PHP") === false){
    echo "Não possuímos PHP nessa frase. <br>";
}

// substr já utilizado anteriormente, recorta a string
// substr(array, inicio, fim) o inicio abaixo foi na primeira ocorrencia de "teste" com 5 caracteres 
$p = substr($frase, strpos($frase, "teste"), 5);
echo "$p <br>";