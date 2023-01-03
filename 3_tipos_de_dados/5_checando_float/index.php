<?php
echo "<br>";

$a = "string";
$b = 12.8;

if(is_float($a)){ // false
    echo "É float 1! <br>";
}

if(is_float($b)){ // true
    echo "É float 2! <br>";
}

if(is_float(54.364)){ // true
    echo "É float 3! <br>";
}