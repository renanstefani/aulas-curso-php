<?php

class Cachorro {

    function latir(){
        echo "Latindo! <br>";
    }

    function andar($m){
        echo "Andei $m metros! <br>";
    }

}

$rex = new Cachorro;
$laika = new Cachorro;

$rex->andar(35);
$laika->andar(80);
$laika->latir();