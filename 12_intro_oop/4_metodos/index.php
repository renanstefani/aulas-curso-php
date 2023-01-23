<?php

class Pessoa {

    function falar()
    {
        echo "Olá, eu sou um objeto. <br>";
    }

    function somar($x, $y){
        echo $x + $y . "<br>";
    }

}

$peter = new Pessoa;

$peter->falar();
$peter->falar();

$john = new Pessoa;

$john->falar();

$peter->somar(1, 4);
$john->somar(10, 20);