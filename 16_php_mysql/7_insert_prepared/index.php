<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    // QUERYS
    $nome = "Banqueta";
    $descricao = "Banqueta para balcoes";


    $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?, ?)");

    $stmt->bind_param("ss", $nome, $descricao); // s = string,  i = integer

    $stmt->execute();

    $conn->close();
?>