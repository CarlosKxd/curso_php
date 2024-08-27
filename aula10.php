<?php

/**
 * Criar duas funcoes(separadas) onde cada uma recebe um parametro(string)
 * e retorna um valor boolean (true || false, 0 || 1).
 * 
 * Objetivo: Validar CPF, CNPJ
 * 
 * Sugestao/Dica para o nome da funcao: isValidCPF, isValidCNPJ.
 * CPF: "00000000000" - 11 digitos
 * CNPJ: "00000000000000" - 14 digitos
 * 
*/

function isValidCPF($cpf) {
    $padrao = "/^[0-9]*$/";
    $cpf = preg_replace($padrao, "", $cpf);

    // codigo aqui

    return true;
}

function isValidCNPJ($cnpj) {
    $padrao = "/^[0-9]*$/";
    $cnpj = preg_replace($padrao, "", $cnpj);

    // codigo aqui

    return true;
}

$cpf = "491.582.630-98";


$cpfValido = isValidCPF($cpf);

if ($cpfValido) {
    echo "O CPF: $cpf é Valido.";
} else {
    echo "O CPF: $cpf é Invalido.";
}
