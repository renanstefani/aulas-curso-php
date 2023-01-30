<?php
    echo "<br>";

    // mktime(hora, minuto, segundo, mes, dia, ano);
    $dataLancamento = mktime(21, 0, 0, 10, 29,1999);
    echo $dataLancamento;

    echo "<br>";

    $dataLancamentoFormatada = date('d/m/Y', $dataLancamento);
    echo $dataLancamentoFormatada . "<br>";

    $dataFutura = mktime(12, 30, 0, 6, 1, 2047);

    $dataFuturaFormatada = date('d/m/Y', $dataFutura);
    echo $dataFuturaFormatada . "<br>";
