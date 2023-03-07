<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    // QUERYS
    $q = "SELECT * FROM itens";

    $result = $conn->query($q);

    $conn->close();

    // PRIMEIRO ITEM
    $item = $result->fetch_assoc();

    print_r($item);

    // TODOS OS RESULTADOS
    $itens = $result->fetch_all();

    print_r($itens);

?>