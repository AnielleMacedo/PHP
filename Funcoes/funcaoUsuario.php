<?php 


//exemplo de subroutine
function ola1(){
	echo "Essa è uma subrotina porque nao retorna nada";
}

//chamo
ola1();

//--------------------------------------------------------------------
echo "<br>";

//exemplo de funcao
function ola2(){
	return "Essa è uma funcao pq possui o comando return";
}

//chamo a funcao usando echo
echo ola2();

echo "<br>";

//-------------------------------------------------------------------------

//veja q usando funcao com return temos mais liberdad de manipular funcoes
echo strlen(ola2());



 ?>