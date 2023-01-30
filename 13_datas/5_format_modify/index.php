<?php

    // Data atual
    $data = new DateTime();

    echo $data->format('d/m/Y') . "<br>";

    echo $data->format('D, d - m - Y') . "<br>";

    // Data + 10 dias
    $data->modify('+10 days');
    echo $data->format('d/m/y') . "<br>";

    // Data -1 mes
    $data->modify('-1 month');
    echo $data->format('d - m - y') . "<br>";
