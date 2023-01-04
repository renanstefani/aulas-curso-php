<?php

class Pessoa {
    function falar(){
        echo "Olá pessoal!";
    }
}

$renan = new Pessoa();

$renan->nome = "Renan";

echo $renan->nome;

echo "<br>";

$renan->falar();