<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    // QUERYS
    
    $id = 5;

    // Preparamos o statement para realizar o bind do id posteriormente
    $stmt = $conn->prepare("SELECT * FROM itens WHERE id > ?");

    // Realizamos o bind do id especificando o tipo de dado i = integer
    $stmt->bind_param("i", $id);

    // Executamos a query
    $stmt->execute();

    // Resgatamos o resultado
    $result = $stmt->get_result();

    // Armazenamos o resultado como string em uma nova variavel
    $data = $result->fetch_all();

    print_r($data);

    ?>