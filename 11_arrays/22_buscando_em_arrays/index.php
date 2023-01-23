<?php

$arr = ['arroz', 'feijão', 'carne bovina', 'batata'];

// in_array(elemento, array)
if(in_array('batata', $arr)){
    echo "Possui batata no array";
} else {
    echo "Não possui batata no array";
}

echo "<br>";

$f = 'feijão';

if(in_array($f, $arr)){
    echo "Possui feijão no array";
} else {
    echo "Não possui feijão no array";
}

echo "<br>";

if(in_array('inexistente', $arr)){
    echo "Possui o item no array";
} else {
    echo "Não possui o item no array";
}


