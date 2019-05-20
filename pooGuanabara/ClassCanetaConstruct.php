<pre>
<?php 
//uso a tag <pre> pra formatar o codigo no browser, melhor que ctrl u

class Caneta
{
	public $cor;
	public $modelo;
	private $ponta;
	protected $carga;
	protected $tampada;

	//metodo construtor pode ter o mesmo nome da classe ou __construct
	public function __construct($cor,$m,$p,$carga) 
	{
		$this->cor= $cor;
		$this->modelo= $m;
		$this->ponta= $p;
		$this->carga= $carga;
		$this->tampar(); //veja q metodo n precisa vir como parametro

	}

	//metodos getters and setters
	public function getCor(){
		return $this->cor;
	}

	public function setCor($cor){
		$this->cor = $cor;
	}

	public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($model){
		$this->modelo = $model;
	}

	public function getPonta(){
		return $this->ponta;
	}

	public function setPonta($p){
		$this->ponta= $p;
	}

	public function getCarga(){
		return $this->carga;
	}

	public function setCarga($c){
		$this->carga = $c;
	}

	public function getTampada(){
		return $this->tampada;
	}

	public function setTampada($t){
		$this->tampada = $t;
	}

	//metodos
	public function rabiscar(){
		if($this->tampada=== true){
			echo "Nao pode rasbiscar porque esta tampada";
		}
		else{
			echo "Estou rabiscando poque esta destampada!";
		}
	}


	//veja que o metodo publico da acesso ao atributo tampada q e protected
	public function tampar(){
		$this->tampada = true;
	}

	public function destampar(){
		$this->tampada = false;
	}

}


//qdo instancia classe que possui construtor c argumentos ja devo passa-los aki tb. Entao veja q numa unica linha consigo criar e atribuir todos valores de um objeto
$c1 = new Caneta("vermelha","Crown",0.5,98);
$c2 = new Caneta("rosa","Crown",0.7,78);
$c3 = new Caneta("preta","bic",0.3,99);




//imprimo diretamente e ja vem os valores q passei no construtor 
print_r($c1);
print_r($c2);
print_r($c3);



//testando APENAS gets
echo "Eu tenho uma caneta {$c1->getModelo()} de cor {$c1->getCor()} de ponta {$c1->getPonta()} , carga {$c1->getCarga()} e que esta {$c1->getTampada()}";//usa as chaves pq senao n consegue interpolar

 ?>

 
</pre> 