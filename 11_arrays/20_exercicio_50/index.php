<?php

$nomeIdade = [
    'John' => 40,
    'James' => 20,
    'Harry' => 27
];

?>

<table border="1">
    <thead>
        <th>Nome</th>
        <th>Idade</th>
    </thead>

    <?php foreach($nomeIdade as $nome => $idade): ?>
        <tr>
            <td> <?= $nome ?></td>
            <td> <?= $idade ?></td>
        </tr>
    <?php endforeach; ?>
</table>