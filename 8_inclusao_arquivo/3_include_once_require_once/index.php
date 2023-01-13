<?php

// Independente da instrução se include ou require
// se utilizarmos o once como o nome já diz será incluído apenas uma vez
include_once "testeX.php";
include_once "testeX.php";
require_once "testeX.php";

require_once "testeY.php";

?>

<p>Parágrafo após inclusões.</p>