<?php

    $data1 = new DateTime();
    $data2 = new DateTime();
    $data3 = new DateTime();

    $data2->setDate(2047, 10, 12);

    // Foi necessário setTime para serem iguais
    $data1->setTime(01, 00, 00);
    $data3->setTime(01, 00, 00);

    if($data2 > $data1){
        echo "A data 2 é maior que a data 1. <br>";
    }

    if($data1 == $data3){
        echo "As datas 1 e 3 são iguais. <br>";
    }