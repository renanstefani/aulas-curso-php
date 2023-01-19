<?php

$nome = "John";

// Inserimos a sintaxe na string e após a virgula declaramos a variável:

// %s = string
printf("O nome é %s <br>", $nome);

// %d = int
$n = 20;
printf("Um dos números é o %d e o outro é %d <br>", $n, 100);

// %f = float
printf("A temperatura atual é %f graus. <br>", 26.5);
// Limitando casas decimais: (.2f = 2 casas)
printf("A temperatura atual é %.2f graus. <br>", 26.5);

