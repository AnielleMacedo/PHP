<?php

//adicionando retorno de uma funcao insiro numero int mas quero que retorno seja string
function soma(int ... $valores) : string{

	return array_sum($valores);
}


var_dump(soma(2,2));
echo "<br>";
echo soma(2,2);
echo "<br><br>";

//insiro float e quero float tb como retorno
function soma2(float ... $valores) : float{

	return array_sum($valores);
}
var_dump(soma2(2.56,2.40));
echo "<br>";
echo soma2(2.56,2.40);

?>