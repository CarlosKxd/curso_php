<?php

/**
 * Criar uma classe/objeto que representa um banco 
 * esta classe devera ter as operações basicas, como:
 * Saque, Deposito, Extrato e Transferência
 * 
 * Também devera, fazer as devidas validações para cada operação
 * EX: não pode sacar mais que tem na conta, depositar envelope sem valor...
 * 
 * Tranferência é a mesma coisa que o pix 
 * ex: quem está mandando deve saber o destinatário...
 */

$destinatario = "Carlos";
$saldo = 2000;

 class Banco{

    public $saldo = 2000;
    public $erro = "";

    public function extrato(){

        if ($this->erro != '') {
            return $this->erro;
        }

        return $this->saldo;
    }

    public function saque($valor){

        if($valor <=0 || $valor == ""){ 
            $this->erro = "<br>Não é possivel efetuar o saque, informe um valor. <br>";
        } else if( $valor > $this->saldo){
            $this->erro = "<br>Não é possivel efetuar o saque, o seu saldo é: $valor o valor sacado é: $this->saldo <br>";
        } else {
            $this->saldo -= $valor;
        }

    }
   
    public function deposito($valor){

        $valor = preg_replace("/[^0-9]/", "", $valor);

        if($valor <=0 || $valor == ""){ // entre () sempre ira executar primeiro tudo que está dentro de ().
            $this->erro = "<br>O valor do deposito deve ser positivo<br> ";    
        } else {
            $this->saldo += $valor;
        }
    }   

    public function tranferencia($valor, $destinatario = ""){

        $valor = preg_replace("/[^0-9]/", "", $valor);

        if($valor <=0){
            $this->erro = "Não foi possivel realizar a transferência. Por favor, insira um valor válido.";
        } else if($valor > $this->saldo){
            $this->erro = "Não foi possivel realizar a transferência. o valor informado é: $valor e seu saldo é: $this->saldo.";
        }else if($destinatario == ""){
            $this->erro = "O destinatario não foi informado.";
        } else {
            $this->saldo -= $valor; 
        }

    }
 }

 $banco = new Banco();
 $banco->saque(100);
 echo "Saldo após saque: " . $banco->extrato() . "<br>";
 
 $banco->deposito(100);
 echo "Saldo após depósito: " . $banco->extrato() . "<br>";
 
 $banco->tranferencia(2000,"Carlos");
 echo $banco->extrato();
//  echo "Saldo após transferência para o destinatário $destinatario: " . $banco->extrato() . "<br>";


