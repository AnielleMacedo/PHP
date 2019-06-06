<!DOCTYPE html>
<html>
<head>
    <!--atencao so pega sem a pasta coloca diretamente estilo.css-->
	<link rel="stylesheet" type="text/css" href="estilo.css">
	
</head>
<body>


<div>  
<?php


echo "<h3> Exercicio1: Usando paragrafo no browser:</h3>";
$nome = "Anielle"; //veja que pro browser interepetar paragrafo devemos usar br
$idade= 30;
echo $nome." tem " .$idade. " anos\n","<br>";
echo "Ola mundo", "<br>";


echo "<h3> Exercicio2: Concatenando strings sem operador:</h3>";
$nome = "Gabriele";
$idade= 31;
echo "$nome tem $idade anos", "<br>";//aki nem precisou usar operador concaten so usar aspas duplas

$no= (int)"10Gustavo";
echo "$no";


echo "<h3> Exercicio3: Usando html dentro do php:</h3>";
echo "<h2> HELLO, <br/> World! </h2>"; //usanso html dentro do echo de php




echo "<h3> Exercicio4: Transformando o numero 32 em binario usando sprintf para output:</h3>";
$conversao = decbin(32) . "\n";

echo sprintf($conversao);


function foo(int $a, string ...$options) {
 foreach ($options as $value) {
 /* ... */
 }
}
echo foo(1); // $options = []
foo(1, 'bar', 'baz'); // $options = ['bar', 'baz']
//foo(1, 'bar', 2); // Fatal error


function fibonacci(int $num): int
{
 if ($num === 0) { //30 igual a 0 no
 return 0;
 } elseif ($num === 1) {//30 iual a 1 nao
 return 1;
 } else { //entao esegue questo retorna 29 + 28 etc..
 return fibonacci($num-1) + fibonacci($num-2);
 }
}

echo fibonacci(30);
//echo fibonacci(100); terminar




?>

</div>
</body>
</html>