<?php 

//desde que a condicao seja verdadeira ele vai executar

$condicao= true;

while ($condicao) {
	
	//crio um numero randomico entre 1 e 10
	$numero = rand(1,10);

	//qdo o numero for 3 vai executar o if abaixo
	if($numero ===3){

		echo "Imprimo TRES!!!";
		//e dou a condicao de parada p terminar o ciclo
		$condicao=false;
	}

	echo $numero. " ";
}




 ?>