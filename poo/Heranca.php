<?php 

//classe generica
class Documento
{
	
	private $numero;


	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($num){
		$this->numero= $num;
	}

}

/**
 * 
 */
class Cpf extends Documento
{
	
	public function validar():bool
	{

		$numeroCpf = $this->getNumero();
		# validacao cpf
		return true;
	}
}



//instanciacao
$doc = new Cpf();
$doc->setNumero("123456");
var_dump($doc->validar());

echo $doc->getNumero();




 ?>