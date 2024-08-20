<?php

function imprimir($texto, $numero) {
    echo $texto;
}


$frase = "Ola mundo!";
$valor = 10;


// imprimir($frase, $valor);


/**
 *  Criar uma calculadora utilizando funcoes, recebendo 2 numeros como parametro.
 * 
 *  Operacoes: + - * / %
 * 
 *  Retornar o valor para o usuario, salvar em uma outra variavel e exibir este valor.
 */

 function calculadora($valor1, $operador, $valor2) {
    $resultado = 0;

    if ($operador == '+' ) {
        $resultado = $valor1 + $valor2;
    }

    if ($operador == '-' ) {
        $resultado = $valor1 - $valor2;
    }

    if ($operador == '*' ) {
        $resultado = $valor1 * $valor2;
    }

    if ($operador == '/' ) {
        $resultado = $valor1 / $valor2;
    }

    if ($operador == '%' ) {
        $resultado = $valor1 * $valor2 / 100;
    }

    return $resultado;
 }

 $valor1 = 100;
 $operador = "%";
 $valor2 = 10;

 $resultado = calculadora($valor1, $operador, $valor2);

// echo "O resultado de: $valor1 $operador $valor2 = $resultado";


/**
 * UTILIZAR FUNCOES
 * Crie um sistema bancario contendo as seguintes operacoes:
 * 
 * Deposito, Saque, Extrato(saldo)
 * 
 */


function banco($valor, $operacao, $saldoAtual) {

    $saldo = $saldoAtual;

    if ($operacao == "extrato") {
        return $saldo;
    }
    
    return $saldo;
}

$saldoAtual = 50;
$valor = 100;
$operacao = "deposito";

$saldoAtual = banco($valor, $operacao, $saldoAtual);
echo "Extrato: $valor $operacao = $saldoAtual<br>";

$operacao = "saque";
$saldoAtual = banco($valor, $operacao, $saldoAtual);
echo "Extrato: $valor $operacao = $saldoAtual<br>";
