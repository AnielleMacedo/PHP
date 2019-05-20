<?php 

//exemplo rotinas com multiplos parametros


function soma(){

	//PEGA TODOS OS ARGUMENTOS DADOS PELO USUARIO e bota dentro de 1 VETOR automaticamente
	$argumentos = func_get_args();

	//func_num_args retorna o numero de ARGUMENTOS DADOS pelo usuario
	$num_args = func_num_args();

	//variavel c a soma dos valores
	$sum = 0;

	for ($i=0; $i <$num_args; $i++) { //obs em vez de usar ciclo for poderia retornar diretamente com array_sum($argumentos)
		$sum += $argumentos[$i];
		
	}

	return $sum;//retorna o soma
}


$result = soma(3,5,2,4.5);//coloca so valores nuemricos
echo $result;


 ?>