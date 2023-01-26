<?php

use Cachorro as GlobalCachorro;

    class Cachorro {

        public $raca;
        public $idade;
        public $peso;
        public $cor;

        function __construct($raca, $idade, $peso, $cor) {
            $this->raca = $raca;
            $this->idade = $idade;
            $this->peso = $peso;
            $this->cor = $cor;
            
        }

        public function detalhar(){
            echo "O cachorro é da raça $this->raca, pesa $this->peso kgs, tem $this->idade e é da cor $this->cor. <br>";
        }
        
    }

    $rex = new Cachorro("Viralata", 5, 8, "caramelo");
    $rex->detalhar();

    $laika = new Cachorro("Viralata", 2, 5, "branca");
    $laika->detalhar();
