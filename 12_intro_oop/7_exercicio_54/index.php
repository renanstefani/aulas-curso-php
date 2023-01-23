<?php

use Pessoa as GlobalPessoa;

    class Pessoa {
        public $nome;
        public $idade;

        function lutar($l){
            echo "Teremos $l lutas. <br>";
        }
    }

    $tyler = new Pessoa;

    $tyler->nome = "Tyler Durden";
    echo $tyler->nome . "<br>";

    $tyler->idade= 35;
    echo $tyler->idade . "<br>";

    $tyler->lutar(2);

    echo "Seu nome é $tyler->nome e ele tem $tyler->idade anos. <br>";