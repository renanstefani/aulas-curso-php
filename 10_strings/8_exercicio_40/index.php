<?php
echo "<br>";

$str = "O rato roeu a roupa do rei de Roma";
// 4 letras As

// Criando contador
$letraEspecifica = 0;

for($i = 0; $i < strlen($str); $i++){
    
    if($str[$i] === "a" || $str[$i] === "A"){
        $letraEspecifica++;
    }

}

echo "Quantidade de A's ou a's na frase: $letraEspecifica";

echo "<br>";

// Praticando
$contador2 = 0;

for($j = 0; $j < strlen($str); $j++){

    if($str[$j] === "o" || $str[$j] === "O"){
        $contador2++;
    }
}

echo "Temos $contador2 letras O's ou o's.";