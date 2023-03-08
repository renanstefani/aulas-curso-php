<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    // QUERYS
    
    $id = 15;

    $stmt = $conn->prepare("DELETE FROM itens WHERE id = ?");

    $stmt->bind_param("i", $id);

    $stmt->execute();

    $conn->close();
?>