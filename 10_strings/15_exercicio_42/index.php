<?php

$pergunta = "Cadê o meu queijo? Ele estava aqui em cima";

$palavraQueijo = substr($pergunta, 12, 6);
$palavraEstava = substr($pergunta, 24, 6);

echo $palavraQueijo . "<br>";
echo $palavraEstava . "<br>";