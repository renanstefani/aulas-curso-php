<?php
    echo "<br>";

    class Car {
        // public pode ser acessada em qualquer lugar
        public $rodas = 4;

        // private pode ser acessada apenas dentro da class
        private $vidro = "Sem película";

        // protected pode ser acessada apenas dentro da class e nas classes derivadas de sua classe
        protected $portas = 4;

        public function getVidro(){
            return $this->vidro;
        }

        public function getPortas(){
            return $this->portas;
        }

    }

    class Mecanico {

        public function alterarRodas($carro){
            $carro->rodas = 10;
        }

        public function colocarPelicula($carro, $pelicula){
            $carro->vidro = $pelicula;
        }
    }

    
    $carro = new Car;
    echo $carro->rodas . "<br>";

    
    $renan = new Mecanico;

    $renan->alterarRodas($carro);
    echo $carro->rodas . "<br>";

    // Não podemos alterar nem acessar por ser privado
    // $renan->colocarPelicula($carro, "G20");

    // Dessa forma conseguimos apenas acessar, já que criamos a function getVidro como pública
    // Permanecemos sem poder alterar devido a $vidro ser private
    echo $carro->getVidro() . "<br>";

    // A propriedade só pode ser alterada dentro da class
    // $carro->vidro = "Impossível - faltal error";

    echo $carro->getPortas();
