<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    // QUERYS

    // $create = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";

    // $conn->query($create);

    $drop = "DROP TABLE teste";

    $conn->query($drop);

    $conn->close();
?>