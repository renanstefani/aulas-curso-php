<?php

    $data1 = new DateTime();
    $data2 = new DateTime();

    $data2->setDate(2047, 06, 20);

    print_r($data1);
    echo "<br>";

    print_r($data2);
    echo "<br>";
    
    $diferenca = $data1->diff($data2);
    print_r($diferenca);
    echo "<br>";

    echo $diferenca->format("%a days");
    echo "<br>";