<?php 

//EXEXMPLO DE USO DE REFERENCIA EM UM CICLO FOREACH

//ARRAY UNIDIMENSIONAL
$pessoa = array(
	'Nome'=> "Maria Clara",
	'idade'=> 7,
	'nascimento'=>'18/04/2010',
	'matricula'=>45);

//passo os valores do meu array por refereencia
foreach ($pessoa as &$value) {

	if(gettype($value) === 'integer') //immprime so se valor for tipo int e depois aumenta cade 1 deles de 10
		$value +=10;
		echo $value."<br>";
}



print_r($pessoa)."<br>";//observe que se eu tirar o & de referencia do for each apenas esse aarray original volta com os valores das idades anteriores sendo 7 e 45. E com o & fica idades 17 e 55.






 ?>