<?php

$a = 4;

while($a <= 30){
    echo "O valor de A é: $a <br>";

    if($a === 24){
        echo "Fim do loop! <br>";
        break;
    }

    $a += 2;
}