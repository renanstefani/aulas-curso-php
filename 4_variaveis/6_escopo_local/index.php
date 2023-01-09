<?php

$x = 15;

echo "$x global <br>";

function teste(){
    $x = 5;
    echo "$x local <br>";
}

teste();

function testando(){
    $x = 12;
    echo "$x local 2 <br>";
}

testando();

$x = 999;

echo "$x global 2 <br>";