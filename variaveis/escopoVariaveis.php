<?php

//variavel de escopo local so existe naquele arquivo que vc criou
$nome = "Glaucio";

function teste(){

	global $nome; //devemo dizer que e global na funcao senao n funciona
	echo $nome;
}

function teste2(){

	
}

teste();
?>