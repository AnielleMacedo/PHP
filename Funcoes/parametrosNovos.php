<?php

//os 3 pontos permite declarar uma serie de valores retornando sempre um array como na function_get_args
function soma(int ... $valores){

	return array_sum($valores);//uso a funcao soma do php p n precisar fazer um for
}

echo soma(20,2,4,3,2);
echo "<br>";

echo soma(20.5,2);//como declaramos com int ele ignora os numeros doubles e pega sua parte inteIRA




?>