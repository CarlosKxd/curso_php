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
 * Criar mascara para número de telefone
*/

/**
 * CPF: "491.582.630-98"
 * CPF: "###.###.###-##" 14
 * CPF: "49158263098" 11
 */
function addMaskCPF($cpf) {

    $cpfMascarado = "";
    $maskCPF = "###.###.###-##";
    $j = 0;

    for ($i = 0; $i < strlen($maskCPF); $i++){

        if ($maskCPF[$i] == '#') {
            $cpfMascarado .= $cpf[$j]; // Adiciona o dígito do CPF
            $j++;
        } else {
            $cpfMascarado .= $maskCPF[$i]; // Adiciona o caractere da máscara
        }
    }

    return $cpfMascarado;
}

function validaCPF($cpf) {
    $cpf = preg_replace('/[^0-9]/', '', $cpf);

    // Verifica se foi informado todos os dígitos corretamente
    if (strlen($cpf) != 11) {
        return false;
    }

    // Verifica se foi informada uma sequência de dígitos repetidos
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }

    // Faz o cálculo para validar o CPF
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return false;
        }
    }
    return true;
}

$cpf = "491.582.630-98";

$cpfValido = validaCPF($cpf);
$cpf = preg_replace('/[^0-9]/', '', $cpf);

$cpf = addMaskCPF($cpf);

if ($cpfValido) {
    echo "O CPF: $cpf é Válido.";
} else {
    echo "O CPF: $cpf é Inválido.";
}
