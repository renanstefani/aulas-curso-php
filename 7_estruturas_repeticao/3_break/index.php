<?php

$x = 0;

while($x < 10){
    echo "O x é igual a: $x <br>";

    if($x === 8){
        echo "Terminando o loop <br>";
        break;
    }

    $x++;
}