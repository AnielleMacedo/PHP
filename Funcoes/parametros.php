<?php 


//vamos supor que quero passa mundo como parametro
function ola($texto){

	return "Ola $texto! <br>";
}

//veja que a funcao pede parametro na hora de chamar
echo ola("Mundo");
echo ola("Brasil");
echo ola("Italia");

//------------------------------------------------

//se definirmos valor padrao dos parametro podemos chamar a funcao sem obrigacao de inserir parametro
function ola1($texto="mundo"){

	return "Ola $texto! <br>";
}

echo ola1();
echo ola1("Brasil");
echo ola(""); //caso n queria imprimir nad abota vazio


//um com parametro obrigatorio e outro nao
//veja que parametros obrigatorios devem estar sempre a esquerda senao da erro
function ola2($texto, $periodo ="Bom dia"){

	return "Ola $texto! $periodo <br>";
}

echo ola2("mundinho");