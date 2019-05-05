<?php

$nome= "Hcode";

echo $nome . " no youtube<br>";

$nome .= " Treinamentos<br"; //operador de concatenacao
echo $nome;

//echo "<br";

//operadores de comparacao diferencas entre = e ==

$a = 50.0;
$b =50;

var_dump($a > $b);
var_dump($a = $b); //fez a valer 50 tb, pq um sinal = atribui
var_dump($a == $b);//faz a comparacao de VALOR se a è igual a b
var_dump($a === $b); //faz a comparacao de VALOR E TIPO de a e b

var_dump($a !== $b);//valida se sao diferentes em  TIPO e VALOR

?>