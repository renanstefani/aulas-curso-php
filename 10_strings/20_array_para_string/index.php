<?php

$arr = ["Banana", "Maçã", "Limão", "Laranja"];

$str = implode(", ", $arr);

echo "$str <br>";

$arr2 = ["Guerreiro", "Arqueiro", "Curandeiro", "Mago"];

$str2 = implode(" <---> ", $arr2);
echo "$str2 <br>";