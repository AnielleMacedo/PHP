<pre>
<?php 

/*
A conta sera de 2 tipos cc ou cp. Tera um metodo de abrirconta, ou seja se a conta o status è verdadeiro e se tiver fechada sera falso.Pra poder abri a conta precisa saber tb se ela aè do tipo cc ou cp.SE o tipo  for conta corrente ganha 50 reais e se for conta poupanca ja ganha 150 reais.
Pra fechar conta o cara nao pode ter dinheiro na conta e nem estar devendo.
Pra poder depositar na conta tem que obviamente estar aberta, ou seja status estar verdadeiro.
Pra sacar dinheiro tb tem q a conta estar aberta e tenho que ter saldo suficiente >= ao saque.
Pagar mensalidade, a mensalidade do banco è cobrada todo mes diretamente do saldo. cada vez que o metodo pagarMensalidade for chamado o cliente qutem conta corrente paga 12 reais e o de conta poupanca paga 20 reais de mensalidade.
Ele quer as seguintes visibilidades: proprietario, saldo e status privados, numConta publico e tipoConta protegido. Todos os metodos serao publicos. Considere tb os metodos especiais (get e set) pra todos os atributos.
Ele tb quer um metodo construtor que sempre que uma nova conta for criada indique ja o status como falso e o saldo definido como zero.
**
*/


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
		
	}

	/*aqui nao è como em java que pode ter 2 construtores
	function __construct($prop,$num,$tipo)
	{
		$this->proprietario = $prop;
		$this->numConta = $num;
		$this->tipoConta = $tipo;
	}*/


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
    
    	//seto o tipo ja com o parametro
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
			echo "A sua conta foi fechada com sucesso";
		}

		else if ($this->saldo>0) {
			echo "Esta conta nao pode ser fechada porque possui saldo";
		}
		else if($this->saldo<0)
			echo "Esta conta nao pode ser fechada porque o saldo è negativo";
	}


	function depositar($valor_deposito){

		//n precisa inicializar valor da variavel como em java

		if($this->status == true){ //ve se ta aberta
			$this->saldo += $valor_deposito;
			//$this->setSaldo($this->getSaldo() + $valor_deposito);
			echo "Deposito com valor de $valor_deposito reais realizado com sucesso!!";
			}
		else
			echo "Voce nao pode depositar simplesmente porque a conta esta fechada!";
		
	}

	function sacar($valor_saque){

	if($this->status === true){ //ve se ta aberta

		if($this->saldo>= $valor_saque){
			$this->saldo -= $valor_saque;
			return "Saque realizado com sucesso! Seu saldo atual è {$this->getSaldo()}";
		}
		else{
			return "Voce nao possui saldo suficiente";
		}

	}
	else
		return "Voce nao pode sacar simplesmente porque a conta esta fechada!";
		
	}

	function pagarMensalidade(){

		if($this->status === true){
			if($this->tipoConta == "CC")
				$this->saldo -= 12;

			else if($this->tipoConta == "CP")
				$this->saldo -= 20;

		return $this->saldo;
		}
		
		else
			return "Voce nao pode pagar mensalidade simplesmente porque a conta esta fechada!";
	}
}





//instancio classe 
//posso criar inumeros objetos
$c1 = new ContaBanco();
//$c2 = new ContaBanco("Urania Macedo", 4567);




//stampo

print_r($c1);
//print_r($c2);

echo $c1->abrirConta("CC");//a conta corrente ja inciia com 50reais
echo "<br><br>";

$c1->setProprietario("Edivan");
$c1->setNumConta(1234);
print_r($c1);

echo $c1->depositar(300.00);
echo "<br><br>";
print_r($c1);

echo $c1->sacar(30);
echo "<br><br>";
echo $c1->pagarMensalidade();
echo "<br><br>";
echo $c1->sacar(200);
echo "<br><br>";
echo $c1->fecharConta();
echo "<br><br>";
echo $c1->sacar(108);
echo "<br><br>";
echo $c1->sacar(11.50);
echo "<br><br>";
echo $c1->fecharConta();
echo "<br><br>";
echo $c1->depositar(300.50);
echo "<br><br>";
echo $c1->sacar(11.50);
echo "<br><br>";
echo $c1->pagarMensalidade();
 ?>
</pre>