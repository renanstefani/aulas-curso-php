<?php
    // O process envia os dados para o DAO

    include_once("db.php");
    include_once("dao/CarDAO.php");

    // Estabelecemos conexão com o DAO para utilizarmos seus métodos
    $carDAO = new CarDAO($conn);


    // Alocamos os dados que vieram do form em variáveis
    $brand = $_POST["brand"];
    $km = $_POST["km"];
    $color = $_POST["color"];


    // Utilizamos os métodos do model Car para definirmos os dados
    $newCar = new Car();

    $newCar->setBrand($brand);
    $newCar->setKm($km);
    $newCar->setColor($color);

    // Uma vez definidos os dados, podemos utilizar o DAO ou seja, executar os métodos que fazem requisições no banco
    $carDAO->create($newCar);

    header("Location: index.php");