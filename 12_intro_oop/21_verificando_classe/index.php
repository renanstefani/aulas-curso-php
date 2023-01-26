<?php

    class Humano {

        public $nome;
        public $idade;

        public function caminhar() {}
        public function falar() {}
    }

    if(class_exists("Humano")){
        echo "A classe existe. <br>";
    }

    if(class_exists("Carro")){
        echo "A classe existe. <br>";
    } else {
        echo "A classe não existe. <br>";
    }

    print_r(get_class_vars("Humano"));

    echo "<br>";
    
    print_r(get_class_methods("Humano"));