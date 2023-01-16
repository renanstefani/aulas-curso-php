<?php

$produtos = ["Arroz", "Feijão", "Macarrão", "Biscoito"];

function listarProdutos($lista){

    $listagem = implode(", ", $lista);

    return $listagem;
}

echo listarProdutos($produtos);

echo "<br>";

// Execução do instrutor:

$lista = ["Arroz", "Trigo", "Cerveja", "Sal", "Vinagre"];

function listaParaString($arr) {

  $str = "Você levou estes itens do mercado: ";

  for($i = 0; $i < count($arr); $i++) {

    // Caso seja o último item insira ponto final ao invés da vírgula
    if($i + 1 == count($arr)) {
      $str .= "$arr[$i].";
    } else {
      $str .= "$arr[$i], ";
    }

  }

  return $str;

}

echo listaParaString($lista);