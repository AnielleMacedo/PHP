<?php 

//funcao anonima sao aquelas que nao tem nome nem return e basta executa no meio de um programa

//callback usada pra avisar qdo terminar uma funcao/proesso
function test($callback){

	//processo lento
	$callback();//essa variavel vai possuir uma funcao anonima
}


//chamo a funcao anonima dentro do PARAMETRO da funcao test
test(function(){

	echo "Terminou";

});








 ?>