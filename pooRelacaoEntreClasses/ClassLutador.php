<?php 


class Lutador 
{
	private $nome;
	private $nacionalidade;
	private $altura;
	private $idade;
	private $peso;
	private $categoria;
	private $vitorias;
	private $derrotas;
	private $empates;

	//construtor inicializado desa vez com PARAMETROS
	function __construct($nome, $na, $al, $id, $peso, $vi, $de, $em)
	{
		$this->nome = $nome;
		$this->nacionalidade = $na;
		$this->altura = $al;
		$this->idade = $id;
		$this->setPeso($peso);//aki ele usou o set pq era obrigatorio nesse caso quando fazer o setPeso ela ja vai autom. atualizar a categroria
		$this->vitorias = $vi;
		$this->derrotas = $de;
		$this->empates = $em;
	}

	//metodos get set
	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getNacionalidade(){
		return $this->nacionalidade;
	}

	public function setNacionalidade($na){
		$this->nacionalidade = $na;
	}

	public function getAltura(){
		return $this->altura;
	}

	public function setAltura($al){
		$this->altura = $al;
	}

	public function getIdade(){
		return $this->idade;
	}

	public function setIdade($id){
		$this->idade = $id;
	}

	public function getPeso(){
		return $this->peso;
	}

	public function setPeso($peso){
		$this->peso = $peso;
		
		//sempre q setar o peso tb seto a categria, por ex: qdo 1 lutador for 120kg automat. o sistema coloca ele no peso pesado
		$this->setCategoria();
	}

	public function getCategoria(){
		return $this->categoria;
	}

//personalizamos todas nossas categorias aki e tiramos o parametro pra poder mudar elas de acordo com o peso digitado pelo usuario
//so vou mudar a categoria qdo eu mudar o peso
//como è set nao usa echo nem retorno pq da erro
	private function setCategoria(){
		
		if($this->peso <52.2){
			$this->categoria= "Invalida";
		}

		elseif ($this->peso <= 70.3) {
			$this->categoria= "Peso Leve";
		}

		elseif ($this->peso<=83.9) {
			$this->categoria= "Peso Medio";
		}

		elseif ($this->peso<= 120.2) {
			$this->categoria="Peso Pesado";
		}
		else{
			$this->categoria= "Inexistente";
		}

		//return $this->categoria;
	}


	public function getVitorias(){
		return $this->vitorias;
	}

	public function setVitorias($vi){
		$this->vitorias = $vi;
	}

	public function getDerrotas(){
		return $this->derrotas;
	}

	public function setDerrotas($de){
		$this->derrotas = $de;
	}

	public function getEmpates(){
		return $this->empates;
	}

	public function setEmpates($em){
		$this->empates = $em;
	}
	



	//metodos
	public function apresentar(){
		echo "Chegou a HORA DA LUTA!!";
		echo "<br>O lutador: {$this->getNome()}";
		echo "<br>Que veio diretamente do: {$this->getNacionalidade()}";
		echo "<br>Idade: {$this->getIdade()}";
		echo "<br>Altura: {$this->getAltura()}";
		echo "<br>Peso : {$this->getPeso()}";
		echo "<br>Vitorias do lutador: {$this->getVitorias()}";
		echo "<br>Derrotas do lutador: {$this->getDerrotas()}";
		echo "<br>Empates do lutador: {$this->getEmpates()}";
	}


	public function status(){
		echo "Nome: {$this->getNome()}";
		echo "<br>Pertence à categoria:". "{$this->getCategoria()}";
		echo "<br>Vitorias: {$this->getVitorias()}";
		echo "<br>Derrotas: {$this->getDerrotas()}";
		echo "<br>Empates: {$this->getEmpates()}";
	}
	

	public function ganharLuta(){

		$this->setVitorias($this->getVitorias() + 1);
	}

	public function perderLuta(){

		$this->setDerrotas($this->getDerrotas() + 1);
	}

	public function empatarLuta(){

		$this->setEmpates($this->getEmpates() + 1);
	}



}



//OBS os metodos getters and setters nao devem obrigatoriamente ser publicos podem tambem ser privados.


 ?>