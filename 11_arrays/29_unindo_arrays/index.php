<?php

$arr1 = [10, 20, 30];
$arr2 = [1, 2, 3];
$arr3 = [3, 6, 9];
$arr4 = ['teste', 'testando', 'testado'];

// array_merge faz a união dos arrays independente do tipo de dado
$arrMerge = array_merge($arr1, $arr2, $arr3, $arr4);

print_r($arrMerge);
echo "<br>";