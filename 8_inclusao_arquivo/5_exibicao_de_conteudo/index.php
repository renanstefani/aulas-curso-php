<?php

$nome = "Renan";
$sobrenome = "Stefani";

?>

<form action="">
    <div>
        <!-- Utilizado apenas para exibição -->
        <input type="text" value="<?= $nome; ?>">
    </div>

    <div>
        <input type="text" value="<?= $sobrenome; ?>">
    </div>

    <div>
        <input type="submit" value="Enviar">
    </div>

</form>