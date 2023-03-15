<?php

    $host = "localhost";
    $dbname = "agenda";
    $user = "root";
    $pass = "";

    try {

        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

        // Ativar o modo de erros, breve descrição abaixo
        // Caso ocorra algum problema o software será parado e o erro será exibido
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e){
        // erro de conexão
        $error = $e->getMessage();
        echo "Erro: $error";
    }