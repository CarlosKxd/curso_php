<?php

/*
    Recriar exercicio da tabuada (aula 3) com os lacos, while e do - while
*/

// $i = 0;
// $numero = 5;

// while ($i < 10)
// {
//     $resultado = $numero * $i;
//     echo "$numero x $i = $resultado" . '<br>';
//     $i++;
// }

/*
    Calcular/iterar os numeros pares de 2 ate 20;
    utilizando os lacos WHILE e FOR;
*/
// $i = 2;
// $numero = 0;

// for ($i = 2; $i <=20 ; $i++ )
// {
//     $resto = $i % 2;

//     if ($resto == 0){

//         echo $i . "<br>";
//     }
// }

/*
    Somar todos os números de 0 - 100
    Utilizando o laco de repetição WHILE
    Após, mostrar o resultado da soma;
*/

$i = 1;
$soma = 0;

while ($i <= 100)
{   
    $soma = $soma + $i; // Mesmo que: $soma += $i;
    $i++;
}

echo "A soma de 1 até 100 é " . $soma; //5050

/*
    Somar todos os numeros PARES de 1 - 100
    Somar todos os numeros IMPARES de 1 - 100
    Utilizando o laco de repetição WHILE
    Após, mostrar o resultado da soma desses numeros;
    Ex.:
    Soma Pares = ?
    Soma Impares = ?

*/

<?php
// Inicializa as variáveis para as somas
$somaPares = 0;
$somaImpares = 0;

// Inicializa o contador
$i = 1;

// Usa um laço while para iterar de 1 a 100
while ($i <= 100) {
    // Verifica se o número é par
    if ($i % 2 == 0) {
        $somaPares += $i;
    } else { // Se não for par, é ímpar
        $somaImpares += $i;
    }
    // Incrementa o contador
    $i++;
}

// Exibe os resultados
echo "Soma Pares = " . $somaPares . "<br>";
echo "Soma Impares = " . $somaImpares;
?>
