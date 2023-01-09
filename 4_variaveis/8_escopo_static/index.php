<?php

function teste(){
    $a = 0;
    $a++;

    echo "$a <br>";
}

echo "<br>";
teste();
teste();
teste();

echo "<br>";

// com o static, o valor é mantido entre chamadas de functions
// mantendo o seu valor entre as alterações
function testeStatic(){
    static $a = 0;
    $a++;

    echo "$a <br>";
}

testeStatic();
testeStatic();
testeStatic();