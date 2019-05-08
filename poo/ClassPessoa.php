<?php 

/**
 * 
 */
class Pessoa 
{
	public $nome;//atributo



	//metodo
	public function falar()
	{
		return "O meu nome è: ".$this->nome; //dentro do  metodo a variavel nao recebe $ pq ja tem o $this
	}
}


//instancio a classe fora da classe Pessoa
$p1 = new Pessoa();//o parenteses aki è opcional qdo vc n tem o metodo construtor
//dou um nome
$p1->nome = "MARIA CLARA";
//stampo o metodo
echo $p1->falar();




 ?>