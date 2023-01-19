<?php

$materialEscolar = [
    "Lápis" => 2,
    "Caneta" => 3.5,
    "Caderno" => 23,
    "Borracha" => 1.5,
    "Livro" => 54
];

function verificarValor($arr){
    // Array para armazenar os dados
    $maiorQueDez = [];

    // foreach utilizando array associativo
    foreach ($arr as $item => $preco) {

        if($preco >= 10){

            array_push($maiorQueDez, $item);
            
        }

    }

    return $maiorQueDez;
}

$novoArr = verificarValor($materialEscolar);

print_r($novoArr);