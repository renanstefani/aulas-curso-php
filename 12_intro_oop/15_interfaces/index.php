<?php

    interface Caracteristicas {

        const nome = "Tyler";

        public function falar();

    }

    class Humano implements Caracteristicas {

        public $idade = 35;

        public function falar(){
            echo "Olá mundo. <br>";
        }

        public function dizerNome(){
            echo "Meu nome é " . self::nome . ".<br>";
        }
    }

    $tyler = new Humano;

    $tyler->falar();

    $tyler->dizerNome();