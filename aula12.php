<?php

class FormatarDados {

    // Propriedades || atributos
    public $texto;
    public $mascara;

    public function __construct($texto, $mascara)
    {
        $this->texto = preg_replace('/[^0-9]/', '', $texto);
        $this->mascara = $mascara;
    }

    public function addMask($texto = "", $mascara = "") {

        $texto = $texto ? $texto : $this->texto;
        $mascara = $mascara ? $mascara : $this->mascara;

        $a =0;
        $valorMascarado = "";
        
        for ($i=0; $i <= strlen($mascara); $i++) {
    
            if ($mascara[$i] == '#') {
                $valorMascarado .=  $texto[$a];
                $a++;
            } else {
                $valorMascarado .= $mascara[$i];
            }
    
        }
    
        return $valorMascarado;
    }

    public function validCelular() {
        // Verifica se o número foi informado
        if (empty($texto)) {
            return false;
        }
    
        // Elimina qualquer coisa que não seja um dígito
        $texto = preg_replace('/[^0-9]/', '', $texto);
    
        // Adiciona zeros à esquerda para garantir que tenha pelo menos 11 dígitos
        $texto = str_pad($texto, 11, '0', STR_PAD_LEFT);
    
        // Verifica se o número tem exatamente 11 dígitos
        if (strlen($texto) != 11) {
            return false;
        }
    
        // Verifica se todos os dígitos são iguais
        if (preg_match('/(\d)\1{10}/', $texto)) {
            return false;
        }
    
        // Opcional: Verifica se o DDD está dentro dos códigos válidos (11-99)
        $ddd = substr($texto, 0, 2);
        if ($ddd < 11 || $ddd > 99) {
            return false;
        }
    
        // Se todas as verificações passarem, retorna true
        return true;
    }

    public function validaCPF() {
    
        // Verifica se foi informado todos os dígitos corretamente
        if (strlen($this->texto) != 11) {
            return false;
        }
    
        // Verifica se foi informada uma sequência de dígitos repetidos
        if (preg_match('/(\d)\1{10}/', $this->texto)) {
            return false;
        }
    
        // Faz o cálculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $this->texto[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($this->texto[$c] != $d) {
                return false;
            }
        }
        return true;
    }

}

$texto = "55992090134";
$mascara = "+## (##) # ####-####";

$formatarDados = new FormatarDados($texto, $mascara); // instanciar o objeto
echo $formatarDados->addMask();
