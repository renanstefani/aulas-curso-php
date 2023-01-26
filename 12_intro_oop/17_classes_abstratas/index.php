<?php

    // abstract class
    // Forma de invocar métodos de uma classe sem que ela esteja instanciada:
    abstract class Teste {

        public static function testandoClasse() {
            echo "Método de uma classe abstrata <br>";
        }

        abstract public function testeAbs();
    }

    // $t = new Teste;

    Teste::testandoClasse();

    class Nova extends Teste {

        // Métodos que herdam uma classe abstrata também devem ser abstratos
        public function testeAbs() {
            echo "Teste método abstrato <br>";
        }
    }

    $n = new Nova;
    $n->testeAbs();