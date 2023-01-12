<?php
echo "<br>";

// Definição do contador
$a = 0;

// Definição da estrutura
while($a < 10) {

    // Corpo do loop
    echo $a . "<br>";

    // Incremento do contador
    $a++;
}

echo "Segundo exemplo: <br>";

// Definição do contador
$b = 10;

// Definição da estrutura
while($b <= 20) {

    // Corpo do loop
    echo $b . "<br>";

    // Incremento do contador
    $b += 2;
}

echo "Terceiro exemplo: <br>";

// Definição do contador
$c = 15;

// Definição da estrutura
while($c > 0) {

    // Corpo do loop
    echo $c . "<br>";

    // Incremento do contador
    $c--;
}

echo "Quarto exemplo: <br>";

// Definição do contador
$d = 20;

// Definição da estrutura
while($d > 0) {

    if($d % 2 != 0){
        echo $d . "<br>";
    }

    // Incremento do contador
    $d--;
}