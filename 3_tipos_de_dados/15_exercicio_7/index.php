<?php

$pessoa = [
    'nome' => 'Tyler',
    'profissão' => 'Contador', 
    'idade' => 23
];

if($pessoa['idade'] >= 18){
    echo "A pessoa é maior de idade.";
} else{
    echo "A pessoa é menor de idade";
}