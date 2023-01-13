<?php
// Mesmo que o arquivo não exista;
// o include gera um warning e NÃO para a aplicação
include "teste.php";

?>

<p>Após o include.</p>

<p>Imprimindo variável "a" criada em teste.php: <?php echo $a; ?></p>