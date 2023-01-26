<?php

    class Carro {

        public $portas;
        public $cor;
        public $marca;

        function __construct($portas, $cor, $marca) {

            $this->portas = $portas;
            $this->cor = $cor;
            $this->marca = $marca;
        }
        
    }

    $pumaGts = new Carro(2, "Branca", "Puma");
    echo "O carro é da marca $pumaGts->marca e tem a cor $pumaGts->cor. <br>";
    
    $fusca = new Carro(2, "Bege", "VW");
    echo "O carro é da marca $fusca->marca e tem a cor $fusca->cor. <br>";