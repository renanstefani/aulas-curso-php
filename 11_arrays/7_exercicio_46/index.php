<?php

$arrayTeste = [
    [1, 2, 3, 4],
    [10, 20, 30, 40],
    [100, 200, 300, 400]
];

// Acessando arrays
for($i = 0; $i < count($arrayTeste); $i++){

    $arrays = $arrayTeste[$i];

    // Acessando arrays internos 
    for ($j = 0; $j < count($arrays); $j++){
        $itens = $arrays[$j];
        print_r($itens . " ");
    }

    echo " - ";
    print_r($arrays);
    echo "Exibindo próximo array: <br>";
}

echo "<br>";

// Execução do instrutor:

$arr = [
    [1, 2, 3, 4],
    [2, 4, 6, 8],
    [3, 6, 9, 12]
];

// Loop no array externo
for($x = 0; $x < count($arr); $x++){

    // Imprimindo array
    echo "Imprimindo array externo: " . ($x + 1) . "<br>";

    // Imprimindo array interno
    for($y = 0; $y <count($arr[$x]); $y++){
        echo $arr[$x][$y] . "<br>";
    }
}