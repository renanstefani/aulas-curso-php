<?php

$nome = "John";

// CONTADOR CONDIÇÃO INCREMENTO/DECREMENTO
for($i = 1; $i <= 15; $i++){

    if($i == 5){
        echo "$nome <br>";
    }

    if($i == 11){
        break;
    }

    echo "Valores $i <br>";
}