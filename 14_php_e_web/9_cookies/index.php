<?php
    // setcookie(nome, valor, data de expiração)

    setcookie("nome", "Renan", time() + 3600); // Tempo atual + 1:00 hora (3600)

    if(isset($_COOKIE['nome'])) {

        $nome = $_COOKIE['nome'];

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Utilizando cookies.</h1>

    <?php if($nome != ''): ?>
        <p>Seja bem-vindo, <?= $nome ?>.</p>
    <?php endif; ?>
</body>
</html>
