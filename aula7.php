<?php

$vetor = array();
$vetorABC = ["A", "D", "C", "E", "B"];

for ($i = 0; $i < count($vetorABC); $i++){
    $maxABC = $i;
    for ($j = $i + 1; $j < count($vetorABC); $j++) {
        if ($vetorABC[$j] > $vetorABC[$maxABC]) { // Verifica se o elemento atual é maior que o elemento máximo conhecido
            $maxABC = $j; // Atualiza o índice do máximo com o índice atual
        }
    }
    $temp = $vetorABC[$maxABC];
    $vetorABC[$maxABC] = $vetorABC[$i];
    $vetorABC[$i] = $temp;

}

for ($i =0; $i < count($vetorABC); $i++){ 
    echo $vetorABC[$i] . ", ";
}
