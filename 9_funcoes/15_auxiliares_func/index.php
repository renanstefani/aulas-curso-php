<?php

function calculo($a, $b){

    print_r(func_get_args());

    echo "<br>" . func_num_args();

    return $a + $b;
}

calculo(20, 1);