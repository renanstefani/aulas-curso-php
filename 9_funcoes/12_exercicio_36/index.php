<?php

// RESOLUÇÃO PROFESSOR:

$arr = [];

for($i = 0; $i <= 30; $i++){

    array_push($arr, $i);
}

function maiorQueSete($array){

    $arrayRetorno = [];

    for($j = 0; $j < count($array); $j++){

        if($array[$j] > 7){
            array_push($arrayRetorno, $array[$j]);
        }
    }

    return $arrayRetorno;
}

$novoArray = maiorQueSete($arr);

print_r($novoArray);

echo "<hr>";

$arr2 = [];

for($i = 0; $i <= 10; $i++){
    array_push($arr2, $i);
}

function maiorQueCinco($valores){
    $arrayMaiorQueCinco = [];

    for($n = 0; $n < count($valores); $n++){

        if($n <= 5){
            array_push($arrayMaiorQueCinco, $valores[$n]);
        }

    }

    return $arrayMaiorQueCinco;
}

$resultado = maiorQueCinco($arr2);

print_r($resultado);