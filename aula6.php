<?php
//$i = 0, 1 ,2 ,3 ,4
//$tamanho = count($vetor);

$vetor = array();
$vetorPar = [];
$vetorImpar = [];
for ($i =1; $i < 100; $i++){
    if ($i % 2 == 0){
        $somaDosPares += $i;
        //$vetorPar = array_push($vetorPar, $i);
        $vetorPar[] = $i;
    } else {
        $somaDosImpares += $i;
        //$vetorImpar = array_push($vetorImpar, $i);
        $vetorImpar[] = $i; 
    }
    
}
// Ordenar os vetores em ordem decrescente
for ($i = 0; $i < count($vetorPar) - 1; $i++) {
    $max_idx = $i;
    for ($j = $i + 1; $j < count($vetorPar); $j++) {
        if ($vetorPar[$j] > $vetorPar[$max_idx]) {
            $max_idx = $j;
        }
    }
    $temp = $vetorPar[$max_idx];
    $vetorPar[$max_idx] = $vetorPar[$i];
    $vetorPar[$i] = $temp;
}
// Ordenar os vetores em ordem decrescente
for ($i = 0; $i < count($vetorImpar) - 1; $i++) {
    $max_idx = $i;
    for ($j = $i + 1; $j < count($vetorImpar); $j++) {
        if ($vetorImpar[$j] > $vetorImpar[$max_idx]) {
            $max_idx = $j;
        }
    }
    $temp = $vetorImpar[$max_idx];
    $vetorImpar[$max_idx] = $vetorImpar[$i];
    $vetorImpar[$i] = $temp;
}

//Alterar a ordem para decrescente
for ($i =0; $i < count($vetorPar); $i++){ 
     echo $vetorPar[$i] . ", ";
}

//Alterar a ordem para decrescente
for ($i =0; $i < count($vetorImpar); $i++){
    echo $vetorImpar[$i] . ", ";
}


