<?php

    class Animal {

        public $nome;

        function escolherNome($nome){
            $this->nome = $nome;
        }

        function latir(){
            return "Latindo! <br>";
        }

        function latirForte(){
            return strtoupper($this->latir());
        }

    }

    $rex = new Animal;

    echo "O nome do animal é: $rex->nome <br>";

    $rex->escolherNome("Rex");

    echo "O nome do animal é: $rex->nome <br>";

    echo $rex->latir();
    echo $rex->latirForte();
