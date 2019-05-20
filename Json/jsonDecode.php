<?php 

//formato ctrl u e toodos devem estar entre aspas senao n funciona
$json= '[{"nome":"Gabri","idade":31},{"nome":"Anielle","idade":31}]';

  

//gerando um array atraves de um arquivo jason, transforma um json em 1 array
//aki precisa do parametro true, pq se n colocar ele cria objeto
$dados= json_decode($json, true);


//depois imprime o array q so aceita var dump ou print_r p imprimir
print_r($dados);
var_dump($dados);




  





 ?>