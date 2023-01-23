<?php

    class Carro {
        public $fabricante;
        public $modelo;
        public $velocidadeMaxima;

        function setVelocidadeMaxima($velMax){
            $this->velocidadeMaxima = $velMax;
        }

        function getVelocidadeMaxima(){
            return $this->velocidadeMaxima . "<br>";
        }
    }
    
    $fusca = new Carro;
    $fusca->fabricante = "VW";
    $fusca->modelo = "Fusca";
    $fusca->setVelocidadeMaxima(140);

    echo $fusca->getVelocidadeMaxima();

    echo "O carro $fusca->modelo da fabricante $fusca->fabricante tem a velocidade máxima de $fusca->velocidadeMaxima km/h. <br>";

    $kombi = new Carro;
    $kombi->fabricante = "VW";
    $kombi->modelo = "Kombi";
    $kombi->setVelocidadeMaxima(130);

    echo "O carro $kombi->modelo da fabricante $kombi->fabricante tem a velocidade máxima de $kombi->velocidadeMaxima km/h. <br>";

    