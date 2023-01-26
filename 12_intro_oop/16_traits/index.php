<?php

    trait Objeto {

        public function teste() {
            echo "Testando trait de objeto <br>";
        }

    }

    trait Testando {

        public $x = 100;

        public function traitTeste() {
            echo "Este método é da trait Testando <br>";
        }
    }

    class Central {

        use Objeto;
        use Testando;

    }

    $c = new Central;

    $c->teste();
    $c->traitTeste();

    echo $c->x . "<br>";