<?php

$teste = "teste 1";

echo "$teste global 1 <br>";

if(5 > 4){

    $teste = "teste 2";

    echo "$teste dentro do if <br>";
}

echo "$teste global 2 <br>";
// mesmo dentro de um bloco if, a variável é alterada no escopo global no PHP


function funcao(){
    $teste = "teste 3 - escopo local";
    echo "$teste <br>";
}

funcao();

function testandoGlobal(){

    // dessa forma acessamos a var teste do escopo global
    global $teste;

    // mesmo dentro da function, se acessarmos uma var global como nesse exemplo,
    // podemos alterar o seu valor (no escopo global)
    $teste = "teste 4";

    echo "$teste global funcao <br>";
}

testandoGlobal();

// como podemos ver, a var foi alterada em seu escopo global, o valor dela agora é "teste 4"
echo "$teste";
