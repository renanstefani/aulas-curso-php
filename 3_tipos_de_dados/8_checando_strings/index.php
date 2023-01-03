<?php

$str = "Renan";
$num = 70;

if(is_string($str)){
    echo "É uma string! 1";
}

if(is_string($num)){
    echo "É uma string! 2";
}

if(is_string("texto qualquer")){
    echo "É uma string! 3";
}