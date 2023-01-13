<h1> Testando require </h1>

<?php
// caso o arquivo inserido via require não esteja acessível, 
// o require gera um fatal error e FORÇA A PARADA da aplicação.
require "teste.php";

?>

<p>Arquivo do include</p>

<!-- Incluindo arquivos PHP localizados em pastas -->
<?php
require "arquivos/funcao.php";
?>