<?php

$arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

$valores = count($arr);
$indice = 0;

echo "<br>";
while($indice < $valores){
    
    $valorAtual = $arr[$indice];

    if($valorAtual == 30 || $valorAtual == 40){
        echo "Valor pulado com continue: $valorAtual <br>";
        $indice++;
        continue;
    }

    echo $valorAtual . "<br>";

    $indice++;
}