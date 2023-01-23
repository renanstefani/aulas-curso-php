<?php

$notas = [
    'João' => 6.5,
    'Maria' => 5,
    'Pedro' => 9,
    'Fernanda' => 9.5
];

arsort($notas);

?>

<h1>Notas finais:</h1>

<ol>
    <?php foreach($notas as $aluno => $nota): ?>
        <li>Aluno: <?= $aluno ?> - Nota: <?= $nota ?></li>
    <?php endforeach ?>
</ol>

