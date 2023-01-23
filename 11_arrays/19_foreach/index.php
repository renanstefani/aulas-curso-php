<?php

$john = [
    'nome' => 'John',
    'idade' => 35,
    'profissao' => 'Programador'
];

$alexa = [
    'nome' => 'Alexa',
    'idade' => 23,
    'profissao' => 'Engenheira'
];

foreach($john as $carac => $value){

    echo "$carac => $value <br>";

}

foreach($alexa as $value){

    echo "$value <br>";

}
