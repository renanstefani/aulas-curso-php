<?php

function teste($a = "teste"){
    echo "Valor de A: $a <br>";
}

teste();
teste("alterado");

// Boa prática: inserir parametros default por último
function testeDois($b, $a = "x"){

    echo "Valor de A: $a e valor de B: $b <br>"; 

}

testeDois("1");

// Caso seja especificado, o default adota o valor:
// $b = "1", $a = "2"
testeDois("1", "2");