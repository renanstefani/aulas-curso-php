<?php

$arr = [1, 2, true, "string1", "string2", false, 3, 4, 5, "string3", [], true];

$x = count($arr);
$y = 0;

while($y < $x){
    
    if(is_string($arr[$y])){
        echo $arr[$y] . "<br>";
    }

    $y++;
}