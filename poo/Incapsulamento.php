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


class Programador extends Pessoa
{
		public function verDados(){

		//chamo get_class p saber de onde programador esta chamando o metodo Verdados..se chama da classe Pessoa ou da classe Programador
		echo get_class($this) . "<br>";

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";//exemplo que mostra que atributo senha nao è acessado pela classe Programador pq senha è private
	}
	
}



//instanciacao
$objeto = new Programador();


echo "<br><br><br>";
echo $objeto->verDados();//herda metodo de pessoa










 ?>