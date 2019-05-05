<?php

$nome= "Anielle Macedo";

//strtoupper:  trasnformar o texto em maiusculo
echo strtoupper($nome);

echo "<br>";
//tranasforma tudo em minusculo
echo strtolower($nome);


echo "<br>";

//Faz so a primmiera letra maiuscula, usada em paragrafos
echo ucfirst($nome);

echo "<br>";

//funciona como capitalize primiera letra de cada palavra maiuscula
echo ucwords($nome);

echo "<br>";

//faz um replace 1parametro velha palavra, o segundo nova palavra e terceiro a varivel que vc quer mudar
echo str_replace("o", "0", $nome);
echo str_replace("e", "3", $nome); //troque o e por 3

echo "<br>";

//função strpos(), que encontra a posição de algum caractere em uma string.
//Nao è case sensitive e comeca a contar a patir do zero
//1 parametro variavel e segundo e a palara q vc ta procurando na variavel
echo strpos($nome, "Macedo"); //torna 3


echo "<br>";

$frase="A repeticao è mae da retencao.";
$q= strpos($frase, "mae");
var_dump($q);

echo "<br>";


//quando quero tudo quer veir antes de algo
$texto_anterior= substr($frase, 0, $q);
var_dump($texto_anterior);


echo "<br>";


//quando quero tudo que vem depois de algo
$texto_posterior= substr($frase, $q);
var_dump($texto_posterior);


echo "<br>";

//strlen retorna o tamanho de uma string (qtidade de caracteres)
echo strlen($frase);

echo strlen("ana vel");
?>