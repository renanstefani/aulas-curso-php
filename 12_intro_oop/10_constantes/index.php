<?php

    class Humano {

        // const são declaradas sem sifrão
        public const OLHOS = 2;
        public const BRACOS = 2;
        public const PERNAS = 2;

        function mostrarConst(){
            // Para acessar const em métodos, utilizamos self ao invés de $this
            echo self::BRACOS . "<br>";
        }

    }

    $renan = new Humano;

    // Para acessar const utilizamos ::
    // $objeto::CONST
    echo $renan::OLHOS . "<br>";

    $renan->mostrarConst();