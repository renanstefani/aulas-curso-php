<?php

function verificarNumero($num){
    if($num % 2 !== 0){
        echo "O número $num é impar! <br>";
    } else {
        echo "O número $num é par! <br>";
    }
}

verificarNumero(25);
verificarNumero(20);
verificarNumero(7);
verificarNumero(2);
