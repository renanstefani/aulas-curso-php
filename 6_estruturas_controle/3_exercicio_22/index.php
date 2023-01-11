<?php

$idade1 = 18;
$idade2 = 30;
$idade3 = 16;

$maioridade = 18;

$aviso = "Você é maior de idade. <br>";

if($idade1 >= $maioridade){
    echo "1 - ";
    echo $aviso;
}

if($idade2 >= $maioridade){
    echo "2 - ";
    echo $aviso;
}

if($idade3 >= $maioridade){
    echo "3 - ";
    echo $aviso;
}