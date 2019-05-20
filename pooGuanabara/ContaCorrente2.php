<pre>
<?php 


class ContaBanco
{
	private $proprietario; //o ideal seria outra classe pro dono faremos mais a frente
	public $numConta;
	protected $tipoConta;//de 2 tipos:cp contapoupanca ou cc conta corrente
	private $saldo;
	private $status;

	function __construct()
	{
		$this->status = false;//$this->setStatus(false);
		$this->saldo = 0.0;
		//echo "Conta criada com sucesso!<br>";//nao recomendavel
		
	}

	
	//metodos getters and setters
	function getProprietario(){
		return $this->proprietario;
	}

	function setProprietario($prop){
		$this->proprietario= $prop;
	}

	function getNumConta(){
		return $this->numConta;
	}

	function setNumConta($num){
		$this->numConta = $num;
	}

	function getTipoConta(){
		return $this->tipoConta;
	}

	function setTipoConta($tipo){
		$this->tipoConta= $tipo;
	}

	function getSaldo(){
		return $this->saldo;
	}

	function setSaldo($saldo){
		$this->saldo= $saldo;
	}

	function getStatus(){
		return $this->status;
	}

	function setStatus($status){
		$this->status= $status;
	}

	//demais metodos
	function abrirConta($tipo){
    
    	//seto o tipo ja com o parametro pra pode escolher entre tipo CC ou CP
		$this->setTipoConta($tipo);

		//assim que abro a conta o status deve passar de false p true
		$this->setStatus(true);//acabei de ativar a conta
		echo "A conta foi aberta com sucesso";

		if($tipo === "CC"){
			$this->setSaldo(50);//fazendo com set
		}

		elseif ($tipo === "CP") {
			$this->saldo = 150; //sem o set
		}
		else{
			echo "Tipo de conta invalido, insira CP ou CC";
		}
		
		
	}

	function fecharConta(){
		if($this->saldo == 0){ //melhor usar dois iguais
			$this->setStatus(false); //seto status como falso ja que fechou
			echo "<p>A sua conta foi fechada com sucesso</p>";
		}

		else if ($this->saldo>0) {
			echo "<p>Esta conta nao pode ser fechada porque possui saldo</p>";
		}
		else if($this->saldo<0)
			echo "<p>Esta conta nao pode ser fechada porque o saldo è negativo</p>";
	}


	function depositar($valor_deposito){

		//n precisa inicializar valor da variavel como em java

		if($this->status == true){ //ve se ta aberta
			$this->saldo += $valor_deposito;
			//$this->setSaldo($this->getSaldo() + $valor_deposito);
			echo "<p>Deposito com valor de $valor_deposito reais na conta de {$this->getProprietario()} realizado com sucesso!!</p>";
			}
		else
			echo "Voce nao pode depositar simplesmente porque a conta esta fechada!";
		
	}

	function sacar($valor_saque){

	if($this->status === true){ //ve se ta aberta

		if($this->saldo>= $valor_saque){
			$this->saldo -= $valor_saque;
			echo "<p>Saque de $valor_saque reais realizado com sucesso na conta de {$this->getProprietario()}! Seu saldo atual è {$this->getSaldo()}.</p>";
		}
		else{
			echo "Voce nao possui saldo suficiente";
		}

	}
	else
		echo "Voce nao pode sacar simplesmente porque a conta esta fechada!";
		
	}

	function pagarMensalidade(){

		if($this->status === true){
			if($this->tipoConta == "CC"){
				$this->saldo -= 12;
				echo "<p>Mensalidade de R$ 12.00 debitado na conta de {$this->getProprietario()}";
			}

			else if($this->tipoConta == "CP"){
				$this->saldo -= 20;
				echo "<p>Mensalidade de R$ 20.00 debitado na conta de {$this->getProprietario()}";
			}

		return $this->saldo;
		}
		
		else
			return "<p>Voce nao pode pagar mensalidade simplesmente porque a conta esta fechada!</p>";
	}
}





//instancio classe que ja vem com os valores default do construtor
//posso criar inumeros objetos
$c1 = new ContaBanco();
$c2 = new ContaBanco();

//abro conta de Edivan 
$c1->abrirConta("CC"); //edivan com 50 reais pelo tipo corrente
$c1->setProprietario("Edivan Macedo");
$c1->setNumConta(1234);
$c1->depositar(300);
$c1->pagarMensalidade();

$c1->sacar(338);
$c1->fecharConta();

echo "<br><br>";
//abro conta de  Urania
$c2->abrirConta("CP");//urania com 150 reais pelo tipo poupanca
$c2->setProprietario("Urania Gomes");
$c2->setNumConta(5678);
$c2->depositar(500);
$c2->sacar(1000);
$c2->pagarMensalidade();
$c2->sacar(630);


$c2->fecharConta();
echo "<br><br>";

//stampo
print_r($c1);
print_r($c2);


//veja q usou echo nos metods em vez de return

//veja que nao precisa fazer eco dos metodos na classe teste pois basta chama-los e ver a altercao diretamente no objeto sem pedir pra imprimir sempre

//posso tirar o echo <br> entre as linhas se uso no programa a tag <p>
?>
</pre>