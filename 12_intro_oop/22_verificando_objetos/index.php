<?php

    class Humano {

        public function pensar() {
            echo "Pensando <br>";
        }
    }

    $renan = new Humano;

    $teste = 1000;

    if(is_object($renan)) {
        echo "É um objeto <br>";
    } else {
        echo "Não é um objeto <br>";
    }

    if(is_object($teste)) {
        echo "É um objeto <br>";
    } else {
        echo "Não é um objeto <br>";
    }

    echo get_class($renan) . "<br>";

    if(method_exists($renan, "pensar")) {
        echo "O método existe <br>";
    } else {
        echo "O método não existe <br>";
    }

    if(method_exists($renan, "socializar")) {
        echo "O método existe <br>";
    } else {
        echo "O método não existe <br>";
    }