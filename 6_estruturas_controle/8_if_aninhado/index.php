<?php

if(10 > 5){
    echo "Primeiro if <br>";

    if("Renan" == "Renan"){
        echo "Segundo if <br>";
    }
}

if(10 < 5){
    echo "Primeiro if 2<br>";

    if("Renan" == "Renan"){
        echo "Segundo if 2 <br>";
    }
} else {
    echo "Passou no else 2 <br>";
}

// Mesmo em if aninhado, o escopo global ainda pode ser acessado:
$escopo = 10;

if(10 > 5){
    echo "Primeiro if 3<br>";

    $escopo2 = 25;

    if("Renan" == "Renan"){
        echo "Segundo if 3 <br>";

        echo $escopo . "<br>";
    }
}

echo $escopo2;