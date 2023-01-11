<?php

$vel = 55;
$lim = 40;

if ($vel < $lim) {

    echo "Velocidade dentro do limite. <br>";

} else if ($vel == $lim) {

    echo "Cuidado, você está no limite da velocidade permitida! <br>";

} else {

    echo "Multa executada, velocidade acima do permitido. <br>";

}