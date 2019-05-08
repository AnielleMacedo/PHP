<?php 
//exemplos d emetodos magicos


class Endereco{

	private $logradouro;
	private $numero;
	private $cidade;

	//metodo construtor
	public function __construct($a,$b,$c)
	{
		$this->logradouro=$a;
		$this->numero=$b;
		$this->cidade=$c;
	}


	//metodo destrutor
	public function __destruct(){
		var_dump("destruir");
	}


	//metodo toString
	public function __toString(){

		return $this->logradouro. ", " .$this->numero. " - " .$this->cidade;
	}
}


//instancio a classe: veja que com o construtor nao preciso setar valor individualmente p cada objeto Faco apenas 1 NEW. $myAddress->setNumero("2");$myAddress->setCidade("Cuneo")...
$myAddress= new Endereco("Via Marconi",123,"cuneo");
var_dump($myAddress);




//imprimindo o toString sozinho sem var_dump
echo $myAddress;

//echo "<br>";



//quando desstruo um obejto da memoria com unset vem chamado automaticamente o metodo destruct imprimindo na tela "destruir"
unset($myAddress);



 ?>