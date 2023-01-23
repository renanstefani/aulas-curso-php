<?php

$arrayTeste = range(10, 45, 6);
print_r($arrayTeste);

echo "<br>";

foreach($arrayTeste as $valor){
    
    if($valor >= 30){
        echo "$valor é um número alto. <br>";
    }
}

echo "<br>";

// Execução do professor:

$arr = range(10, 45);

for($i = 0; $i < count($arr); $i++){

    $soma = $arr[$i] + 6;

    if($soma > 30){

        echo "O número é muito alto <br>";

    } else {

        echo "$soma <br>";
        
    }
}