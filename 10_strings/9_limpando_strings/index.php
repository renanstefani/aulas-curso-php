<?php

$string1 = "     Muitos espaços   ";
echo "Essa é a string 1: $string1 . <br>";


$string1Limpa = trim($string1);
echo "Essa é a string 1: $string1Limpa . <br>";

// rtrim() para limpar espaços da direita
// ltrim() para limpar espaços da esquerda