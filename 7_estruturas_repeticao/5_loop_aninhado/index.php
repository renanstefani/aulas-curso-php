<?php

$i = 1;

while($i <= 5){
    echo "Loop externo $i <br>";

    // segundo contador:
    $x = 1;
    while($x <= 5){
        echo "Loop interno $x <br>";
        $x++;
    }

    $i++;
}