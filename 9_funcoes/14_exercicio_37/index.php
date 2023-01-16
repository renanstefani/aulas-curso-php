<?php

function defineCorCarro($cor = "vermelho"){
    return "A cor do veículo é $cor <br>";
}

$carroDefault = defineCorCarro();
echo $carroDefault;

$carroBranco = defineCorCarro("branco");
echo $carroBranco;