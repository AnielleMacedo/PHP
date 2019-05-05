<?php

//tipos de variaveis BASICAS

$nome = "hCode";
$site = 'www.hcode.com.br';//strings

$ano = 2019;//integer

$salario = 5500.99; //double

$bloqueado = false;//boolean

//tipos de variaveis compostas

//array
$frutas = array("abacaxi", "laranja", "manga");
echo $frutas[2];

echo "<br>";
//object
$nascimento = new DateTime(); //TE RETORNA DATA ATUAL
var_dump($nascimento) ;


//TIPO DE VARIAVEIS ESPECIAIS

//resource
$arquivo = fopen("exemplo-01.php", "r");//leitura de qruivo do hd do pc
var_dump($arquivo);



//null (diferencas entre nulo e vazio)
$nulo = NULL;
$vazio = " ";

echo $nulo;
echo $vazio;

?>