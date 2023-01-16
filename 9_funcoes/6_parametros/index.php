<?php

function velocidadeMaxima($vel){

    if(is_int($vel)){
        echo "A velocidade máxima é de $vel km/h <br>";

    } else {
        echo "É preciso um valor inteiro <br>";
    }


}

velocidadeMaxima(280);
velocidadeMaxima(200);
velocidadeMaxima(180.5);

$velocidade = 150;
velocidadeMaxima($velocidade);

function descreverAnimal($nome, $raca){
    echo "O $nome é da raça $raca <br>";
}

descreverAnimal("Rex", "vira lata");
descreverAnimal("Laika", "poodle");
