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
for
for

//Alterar a ordem para decrescente
for ($i =0; $i < count($vetorPar); $i++){ 
     echo $vetorPar[$i] . ", ";
}

//Alterar a ordem para decrescente
for ($i =0; $i < count($vetorImpar); $i++){
    echo $vetorImpar[$i] . ", ";
}


