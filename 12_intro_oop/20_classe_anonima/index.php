<?php

    $pessoa = new class() {

        public $nome = "Tyler";

        public function dizerNome() {
            echo "Me chamo $this->nome. <br>";
        }
    };

    echo $pessoa->nome . "<br>";

    $pessoa->dizerNome();