<?php

// array_key_exists('nome', $array)

$arr = [
    'nome' => 'Tyler',
    'idade' => 34
];

if(array_key_exists('nome', $arr)) {
    echo "A chave existe! <br>";
} else {
    echo "A chave não existe! <br>";
}

if(array_key_exists('profissao', $arr)) {
    echo "A chave existe! <br>";
} else {
    echo "A chave não existe! <br>";
}


// isset()

if(isset($arr['nome'])){
    echo "A chave existe!  isset <br>";
} else {
    echo "A chave não existe! <br>";
}

$x = 5;
if(isset($x)){
    echo "A var existe!  isset <br>";
} else {
    echo "A var não existe! <br>";
}