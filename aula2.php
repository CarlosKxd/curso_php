<?php

$nome = "Carlos";
$idade = 18;
$cidade = "Bento Gonçalves";
echo "Seja bem vindo $nome à sua cidade nova $cidade";
echo "<br>";
if ($idade >= 18){
    echo "O $nome é maior de idade";
}else{
    echo "O $nome, não pode dirgir carros.";
}

echo "<br>";
echo "Super Calculadora avançada da NASA 4.0";
echo "<br>";
$valorA = 99;
$valorB = 3;
$operacao = "dividir";
$resultado="";

if ($operacao == "soma" || $operacao == "adicao"){
    $resultado = $valorA + $valorB;
}
elseif($operacao == "subtrair" || $operacao == "diminuir"){
    $resultado = $valorA - $valorB;
}
elseif($operacao == "multiplicar" || $operacao == "vezes"){
    $resultado = $valorA * $valorB;
}
elseif($operacao == "dividir" || $operacao == "separar"){
    $resultado = $valorA / $valorB;
}
else{
    echo "Somente são aceitos os 4 sinais de operações matemáticos.<br>
    somar<br>
    subtrair<br>
    multiplicar<br>
    dividir<br>";
}
if($resultado != ""){
echo "A operação escolhida foi $operacao com os valores $valorA e $valorB e o resultado é $resultado<br>";
}

#Testa se a pessoa consegue fazer a carteira de motorista, necessário maioridade e renda.

$idadePessoa = 17;
$dinheiroNaCarteira = 900;

echo "<br>A sua idade é $idadePessoa";
echo "<br>O seu dinheiro é $dinheiroNaCarteira";

if($idadePessoa >= 18 && $dinheiroNaCarteira >= 1000){
    echo "<br>Parabéns, você pode fazer a carteira de motorista!";
}
elseif ($idadePessoa >= 17 && $dinheiroNaCarteira >= 1000){
    echo "<br>Infelizmente você não possuí a idade suficiente, porém tem o dinheiro necessário.";
}
elseif ($idadePessoa >= 18 && $dinheiroNaCarteira >= 900){
    echo "<br>Infelizmente você possuí a idade suficiente, porém não tem o dinheiro necessária.";
}
elseif ($idadePessoa >= 17 && $dinheiroNaCarteira >= 900){
    echo "<br>Infelizmente você não possuí a idade e nem o dinheiro suficiente.";
}
?>