<?php

if(is_int(5)){ //true
    echo "É um número inteiro <br>";
}

if(is_int("string")){ // false
    echo "É um número inteiro <br>";
}


$a = 10;

if(is_int($a)){ // true
    echo "É um número inteiro <br>";
}

