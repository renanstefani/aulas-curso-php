<?php

    $data = new DateTime();

    print_r($data);
    echo "<br>";

    // setDate(ano, mes, dia)
    $data->setDate(1999, 10, 29);

    print_r($data);
    echo "<br>";

    // setTime(hora, minuto, segundo)
    $data->setTime(06, 39, 20);

    print_r($data);
    echo "<br>";

    echo $data->format('d/m/y') . "<br>";