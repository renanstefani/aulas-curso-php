<?php

$alimentos = ["batata", "maçã", "pera", "feijão", "arroz"];

$remocao = array_splice($alimentos, 2, 2);

print_r($alimentos);

echo "<br>";

print_r($remocao);