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
 * Validar depositos em branco (<=0 || '')
 * Validar o saque, valor > saldo || valor em branco (<=0 || '')
 * 
 */

function banco($valor, $operacao, $saldoAtual) {

    $saldo = $saldoAtual;

    $valorInvalido = ($valor < 0 || empty($valor)); // < 0, 0 || '' == true

    if ($operacao == "extrato") {
        return $saldo;
    }

    // empty() == 0, '', null , false = true 
    if ($operacao == "deposito" && $valorInvalido ) {
        return "Não é possivel efetuar o saque, informe um valor.";
    }

    if ($operacao == "saque" && $valorInvalido ) {
        return "Não é possivel efetuar o saque, informe um valor.";
    }
    
    if ($operacao == "saque" && $valor > $saldoAtual ) {
        return "Não é possivel efetuar o saque, seu saldo é: $saldoAtual  o valor sacado é: $valor";
    }
    
    if ($operacao == "saque") {
        // $saldo = $saldo - $valor;
        $saldo -= $valor;
    }


    if ($operacao == "deposito") {
        // $saldo = $saldo + $valor;
        $saldo += $valor;
    }
    
    return $saldo;
}

$saldoAtual = 500; // tem um valor inicial de 500.
echo "Valor inicial: $saldoAtual<br>";

$valor = 100;
$operacao = "deposito";
$saldoAtual = banco($valor, $operacao, $saldoAtual);
echo "$operacao = $valor, Extrato: $saldoAtual<br>";

$valor = 200;
$operacao = "saque";
$saldoAtual = banco($valor, $operacao, $saldoAtual);
echo "$operacao = $valor, Extrato: $saldoAtual<br>"; // 400

$valor = 600;
$operacao = "saque";
$saldoAtual = banco($valor, $operacao, $saldoAtual);
echo "$operacao = $valor, Extrato: $saldoAtual<br>";
