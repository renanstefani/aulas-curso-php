<?php

include_once "backend.php";

?>

<h1>Seja bem-vindo!</h1>
<h2>Cliente: <?= $nome; ?></h2>
<p>Veículos disponíveis:</p>

<ul>
    <?php foreach ($veiculos as $veiculo): ?>
        <li><?= $veiculo; ?></li>
    <?php endforeach; ?>
</ul>