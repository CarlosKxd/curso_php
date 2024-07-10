<?php
/* Utilizar o laco de repetição FOR para cria a tabuada do numero informado pelo usuário.
Ex.:Usuario informou o numero 4, fazer a tabuada do 4.*/

$numero = 5; 

for ($i = 1; $i <=9 ; $i++ )
{

    $resultado = $numero * $i;
    echo "$numero x $i = $resultado" . '<br>';

}