<?php 

//exemplo de array bidimensional, um array com outro array dentro
$pessoas = array();

//posicao[0] do array pessoas
array_push($pessoas,array(
	'nome'=>'Gabri',
	'idade'=>31
));



//posicao[1] do array pessoas
array_push($pessoas,array(
	'nome'=>'Anielle',
	'idade'=>31
));


//print_r($pessoas);

//transformando um array em um documento json
echo json_encode($pessoas);



//pra ver bem no brrowser em forma de codigo aperta crtl U
/*pra instalar extensao de visualizacao do json no chrome vai em :
chrome://apps
clica webstore
json Viewer*/

 ?>