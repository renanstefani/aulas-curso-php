<?php
echo "<br>";

class Car {

    public $rodas;
    public $aro = 20;
    public $cor = "Vermelho";

    function ligar(){
        echo "Ligando o veículo! <br>";
    }
    
}

$ferrari = new Car;

$ferrari->rodas = 4;

echo $ferrari->aro . "<br>";
echo $ferrari->rodas . "<br>";

// Alterando uma propriedade
$ferrari->cor = "Azul";
echo $ferrari->cor . "<br>";

$ferrari->ligar();