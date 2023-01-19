<?php

$algoHtml = "<p>Isso é um teste.</p> <div></div> <p>Outro parágrafo</p>";

echo $algoHtml;

// strip_tags remove as tags e apenas o texto é levado em conta
$salvarTextoBanco = strip_tags($algoHtml);

echo $salvarTextoBanco;