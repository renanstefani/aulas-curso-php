<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    // QUERYS
    
    $stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");
    
    $id = 11;
    $nome = "Cadeira";
    $descricao = "Cadeira para area externa";
    
    $stmt->bind_param("ssi", $nome, $descricao, $id);

    $stmt->execute();

    if($stmt->error) {
        echo "Erro " . $stmt->error;
    }
?>