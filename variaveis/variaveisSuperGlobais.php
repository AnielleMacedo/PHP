<?php

//o $_GET vai ter todas as variaveis q recebemos atraves da url
//da na url apos o sinal de ? vc passa o valor da variavel ex: ?a=Anielle
$nome = $_GET["a"];
//var_dump($nome);
echo $nome;


echo "<br";


//no caso de voce querer em fomrato int deve fazer o cast senao vem como string por default
$idade = (int)$_GET["idade"];
var_dump($idade);
echo $idade;


//resgatar ip do provedor do acesso do usuario
$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;


//pra pegar o nome do arquivo
$ip = $_SERVER["SCRIPT_NAME"];
echo $ip;


?>