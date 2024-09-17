<?php


/**
 * criar por meio de objeto as operacoes matematicas + - * /
 */

class Calculadora {

    // Propriedade || atributo
    public $resultado = 0;

    public function somar($valor, $valor2) {
        $this->resultado = $valor + $valor2;
    }

    public function diminuir($valor, $valor2) {
        $this->resultado = $valor - $valor2;
    }

    public function multiplicar($valor, $valor2) {
        $this->resultado = $valor * $valor2;
    }

    public function dividir($valor, $valor2) {
        $this->resultado = $valor / $valor2;
    }

    public function __toString()
    {
        return  $this->resultado;
    }
}

$calculadora = new Calculadora();

$calculadora->somar(10, 10);
echo $calculadora->resultado;

echo "<br/>";

// $calculadora->dividir(10, 10);
// echo $calculadora->resultado;
echo $calculadora->resultado;
echo $calculadora;










/**
 * Criar uma classe/Objeto que representa um banco
 * esta classe devera ter as operaceos basicas, como:
 * Saque, Deposito, Extrato e Transferencia
 * 
 * Tambem devera, fazer as devidas validacoes para cada operacao.
 */
