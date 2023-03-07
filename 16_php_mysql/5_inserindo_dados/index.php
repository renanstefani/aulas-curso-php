<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    // QUERYS

    $table = "itens";
    $nome = 'Cadeira';
    $descricao = 'Cadeira teste';
    
    $q = "INSERT INTO itens (nome, descricao) VALUES ('$nome', '$descricao')";

    $conn->query($q);

    $conn->close();
?>