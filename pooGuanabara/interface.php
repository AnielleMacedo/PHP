<body>
	<h3> INTERFACE CONTROLE REMOTO</h1>
		<br>
</body>

<pre>
<?php 
//vamos criar uma interface para controle remoto

//interface possui apenas metodos publicos  (nao implementados so declarados e sem body, ou seja sem as chaves {})
//NO PHP NAO PRECISA explicitar q os metodos sao abstracts senao da erro pois so por eles estarem dentro de uma interface ja sao abstratos

//qdo coloca abstract significa q o metodo seja desenvol. externamente

interface Controlador{

	//public abstract function ligar(){} ERRO

	public function ligar();

	public function desligar();

	public  function abrirMenu();

	public  function fecharMenu();

	public  function maisVolume();

	public  function menosVolume();

	public  function play();

	public  function pause();
	
}


/*Qdo voce incapsula a primeira coisa a fazer è tornar todos atributos privados ou protegidos mas nunca publicos
 */
class ControleRemoto implements Controlador
{
	private $volume;
	private $ligado;
	private $tocando;

	//metodo construtor q vai inciializar automaticamnete
	function __construct()
	{
		//qdo criar quero q esteja ja com vol 50, desligado e nao tocando
		$this->volume =50; 
		$this->ligado = false;//n posso colocar palavra desligado devo usar variv true false pq sao booleanos
		$this->tocando= false; 
	}


	//faz os getters e setters pra poder acessar os atributos
	public function getVolume(){
		return $this->volume;
	}

	public function setVolume($vol){
		$this->volume = $vol;
	}

	public function getLigado(){
		return $this->ligado;
	}

	public function setLigado($ligado){
		$this->ligado = $ligado;
	}

	public function getTocando(){
		return $this->tocando;
	}

	public function setTocando($tocando){
		$this->tocando= $tocando;

		

	}




	//sobrescreve os metodos abstratos da Interface Controlador implementando-os
	public function ligar(){
		$this->setLigado(true);
	}


	public function desligar(){
		$this->setLigado(false);
		$this->setTocando(false);
	}



	public function abrirMenu(){
		//metodo vai mostrar as inforacoes do controle remoto
		echo "<br>Esta ligado?: " . ($this->getLigado() ? "SIM" : "NAO"); //if com operador ternario
		
		echo "<br/>Esta tocando? : ". ($this->getTocando() ? "SIM" : "NAO");

		echo "<br>O volume atual è: ". $this->getVolume();
		for ($i=0; $i<$this->getVolume(); $i+=10) { 
			echo "|";
		}
		echo "<br>";
	}


	public function fecharMenu(){
		echo "Fechando Menu...!";
	}


	function maisVolume(){
		if($this->getLigado() == true)
			$this->setVolume($this->getVolume() + 10);
		else
			echo "Nao pode aumentar o volume pq o controle esta desligado";
	}

	function menosVolume(){
		if($this->getLigado() == true)
			$this->setVolume($this->getVolume() - 4);
		else
			echo "Nao pode baixar o volume pq o controle esta desligado";
	}

	function play(){
		//so funcionar se estiver ligado e nao tocando n precisa ==true E PODERIA USAR !($this->getTocando())) em vez de false
		if ($this->getLigado()==true && ($this->getTocando()==false)){
			$this->setTocando(true);
		}
		
		else
			$this->setTocando(false);
			echo "Nao pode da play pq o controle esta desligado";
	}

	function pause(){
		//so funciona se estiver ligado e tocando. OBSERVE que usa outro () na segunda condicao senao da erro
		if ($this->getLigado()==true && ($this->getTocando()==true)){
			$this->setTocando(false);
		}
		else
			//$this->setTocando(true); //sem senso
			echo "Nao pode pausar pq o controle esta desligado";
	}

}


//INSTANCIO A CLASSE
$controle1 = new ControleRemoto();

//stampo objeto p ver o default
print_r($controle1);
echo "<hr>";

//stampo metodos n precisa do echo nos metodos q ja possuem echo dentro deles
$controle1->abrirMenu();
echo "<hr>";

$controle1->ligar();
$controle1->abrirMenu();//qdo liga fica 1
echo "<hr>";

$controle1->maisVolume();
$controle1->abrirMenu();
echo "<hr>";

$controle1->play();
$controle1->menosVolume();
$controle1->abrirMenu();//com o play veja que agora ta tocando
echo "<hr>";

$controle1->desligar();
$controle1->maisVolume();
$controle1->abrirMenu();
$controle1->play();

echo "<hr>";

$controle1->pause();
$controle1->abrirMenu();
//print_r($controle1); 
 ?>
 </pre>