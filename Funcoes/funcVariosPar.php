<?php 

//fazendo uma funcao que pode receber varios parametros ou nao, usando uma funcaopropria de php que è func_get_args

function ola(){

	//recupera todos arg passados pela funcao
	$argumentos= func_get_args();

	return $argumentos;
}


//como retorna um array usa print_r ou var_dump
print_r(ola("bom dia", "Maria", "Como voce esta?"));

//retorna array vazio
var_dump(ola());

//retorna array com 1 elemento
var_dump(ola("cataratas iguacu"));
 ?>