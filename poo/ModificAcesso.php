<?php 


/*Modificadores de acesso
 */


class Pessoa
{

	public $nome ="Rasmus Lerdof";
	protected $idade= 48;
	private $senha= "123456";


	public function verDados(){

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";
	}

	
}

$objeto = new Pessoa();

echo $objeto->nome . "<br";//imprime normal pq è publico mesmo acessando de fora da classe
echo $objeto->idade . "<br";//fatal error pq idade protegida so os herdeiros e a propria classe acessa
echo $objeto->senha . "<br";//fatal error pq senha private so a propria classe acessa

echo "<br><br><br>";
echo $objeto->verDados();//metodo publico consigo acessar de fora da classe










 ?>