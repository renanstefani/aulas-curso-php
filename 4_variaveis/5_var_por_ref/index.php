<?php

$x = 10;

$y = & $x;

echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";

$y = 15;

echo "Atribuição após ref";
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";

$x = 20;

echo "Atribuição após ref 2";
echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";

$nome = "Renan";

$nome2 =& $nome;

echo "<br>";
echo $nome;
echo "<br>";
echo $nome2;
echo "<br>";

$nome2 = "João";

echo "<br>";
echo $nome;
echo "<br>";
echo $nome2;
echo "<br>";

// Se alterarmos o valor de qualquer uma das variáveis, todas serão alteradas
// tanto as referenciadas quanto a que usamos como referencia


