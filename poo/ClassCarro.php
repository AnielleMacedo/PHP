<?php

class Carro{


	private $modelo;
	private $motor;
	private $ano;


	//metodos getters and setters
	public function getModelo(){
		return $this->modelo;
	}


	//set recebe parametro pq è o nome que quero setar
	public function setModelo($valorzinho){
		//o atributo recebe o valor do parametro
		$this->modelo= $valorzinho;
	}


	public function getMotor():float{
		return $this->motor;
	}

	public function setMotor($motor){//lembre que o parametro pode ser qq nome usamos o mesmo p ficar mais facil
		$this->motor= $motor;	
	}

	//:int pra dizer que quero q retorne um inteiro
	public function getAno():int{
		return $this->ano;
	}

	public function setAno($ano){
		$this->ano= $ano;
	}

	//metodo que mostra as informacoes do veiculo
	public function exibeCarro(){
		return array(
			"modelo"=>$this->getModelo(),
			"motor"=>$this->getMotor(), //lembra q no array virgula e nao ;
			"ano"=>$this->getAno()
		);
	}
}

//instancio fora da classe
$c1= new Carro();

//atribuo os valores pros atributos do carro 
$c1->setModelo("Audi");
$c1->setMotor("1.6");
$c1->setAno("2017");


//stampo o metodo exibeCarro com suas infos em forma de array
//como devo exibir um array tem q stampar com print_r() ou var_dump
print_r($c1->exibeCarro());
var_dump($c1->exibeCarro());


  ?>