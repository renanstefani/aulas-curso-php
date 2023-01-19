<?php

$str1 = "Uma string realmente longa.";
$str2 = "String curta";

echo "<br>";

echo strlen($str1) . "<br>";
echo strlen($str2) . "<br>";

$len1 = strlen($str1);
$len2 = strlen($str2);

if($len1 > $len2){
    echo "A primeira string é maior.";
} else {
    echo "A segunda string é maior.";
}