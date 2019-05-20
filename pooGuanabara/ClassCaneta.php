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

	/*public function __construct()
	{
		
	}*/

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


//instancia classe
$c1 = new Caneta();



//atribuo os valores pros atributos 
$c1->modelo = "bic"; //public
//$c1->setModelo("bic Cristal"); //public
$c1->cor = "azul";    //public
$c1->setPonta(0.3); //private so acesso atraves get e set
$c1->setCarga(99); //prtegido



//imprimo o objeto e chamo os metodos

$c1->rabiscar();
echo "<br>";
$c1->tampar();//esse metodo tampa a caneta logo chamo ele antes de dar o print_r do objeto, dai o atributo tampada passa a ser 1

print_r($c1);

$c1->destampar();//se agora eu destampo e imprimo denovo o obejto tampada vale vazio, pq no php 1 è verdadeiro e vazio è false

print_r($c1);

//testando os gets
echo "Eu tenho uma caneta {$c1->getModelo()} de cor {$c1->getCor()}";//usa as chaves pq senao n consegue interpolar

 ?>
</pre> 