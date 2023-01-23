<?php

    class Humano {
        public $idade = 36;

        function falar(){
            echo "Olá mundo! <br>";
        }

        private function gritar(){
            echo "ESTOU APRENDENDO PHP! <br>";
        }

        public function acessarGritar(){
            $this->gritar();
        }

        protected function sussurrar(){
            echo "Estou sussurrando. <br>";
        }

        public function acessarSussurrar(){
            $this->sussurrar();
        }

    }

    class Programador extends Humano {

        // protected permite acessarmos o metodo sussurrar()
        public function acessarSussurrarProgramador(){
            $this->sussurrar();
        }

    }

    $tyler = new Humano;
    $tyler->falar();
    $tyler->acessarGritar();
    $tyler->acessarSussurrar();

    
    $james = new Programador;
    echo $james->idade . "<br>";
    $james->falar();
    $james->acessarGritar();
    $james->acessarSussurrarProgramador();
