<?php

$nomes = ["Maria", "José", "João", "John Doe"];

// foreach($array as $item)
foreach($nomes as $nome) {
    echo "O nome do índice atual é $nome <br>";

    if($nome == "José"){
        echo "Zé <br>";
    }
}