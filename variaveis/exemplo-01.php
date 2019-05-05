<?php


//padrao CamelCase de boa pratica em php


$nomeCompleto = "Maria Clara";


//echo faz apenas output na tela
echo "$nomeCompleto"."<br>";

echo "<br>";

//var_dump faz output na tela com todas informacoes da variavel
var_dump("$nomeCompleto");

//elimina a variavel da memoria deixandoa indefinida qdo imprime denovo
unset($nomeCompleto);

echo "<br>";


//uso o isset pra saber se a variavel existe
if(isset($nomeCompleto)){
	echo $nomeCompleto;
}
else
	echo "A variavel nao existe mais porque voce usou o Unset!";

echo "<br>";


//concatenacao

$nome= "Gabri";
$anoNascimento = 1988;

$info = $nome . "  ". $anoNascimento;
echo $info;