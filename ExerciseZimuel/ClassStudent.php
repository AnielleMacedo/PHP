<pre> 
<?php 


/*
*Creare una classe che gestisca i dati di uno studente
(nome, cognome, email, anno di nascita), i corsi seguiti
con i relativi voti d'esame.
Creare un metodo getMediaEsami(): ?foat che
restituisca la media degli esami sostenuti.*/

/*Aggiungere alla classe Studente il controllo sull'inserimento di un voto
valido tra 0 e 30 e di un numero massimo di corsi pari a
20, tramite delle costanti di classe (e.s. MAX_VOTO)*/


class Studente
{

	public const VOTO_MAX =30;
	public const NUM_MAX_CORSI =20;

	public $nome;
	public $cognome;
	public $email;
	public $anoNascita;
	public $corsi = [];
	public $votoEsami = [];


//veja que è opcional no PHP colocar o tipo antes de cada parametro
	function __construct(string $nome,$cognome,$email,$ano, $cursos, $votos)
	{
		$this->nome = $nome;
		$this->cognome = $cognome;
		$this->email = $email;
		$this->anoNascita = $ano;
		$this->corsi = $cursos;
		$this->votoEsami = $votos;
	}

	//inserindo metodo de controle voto
	public function addVotoEsami($novoVoto){
		if($novoVoto > 0 && $novoVoto <= self::VOTO_MAX)   //como escrever a constante
			array_push($this->votoEsami, $novoVoto);

		else
			echo "Impossivel inserir, voto Invalido!";

	}

	//inserindo metodo de controle de cursos
	public function addCorso($novoCurso){

		if(count($this->corsi)< self:: NUM_MAX_CORSI)   //como escrever a constante
			array_push($this->corsi, $novoCurso);

		else
			echo "Impossivel inserir novo curso.Limite de 20 alcancado!"."<br>";

	}


	public function getMediaEsami():?float{ //possibilidade de retornar null ou float

		if(empty($this->corsi)){
			return null;
		}
		else{

			$soma = array_sum($this->votoEsami);
			$count = count($this->votoEsami);
			return $soma/$count;
		}
	}



}

//intancio e ja crio os arrays pra passar diretamente no objeto

//aluno1
$arr_cursos = array("Java", "PHP", "C#", "Javascript");
$arr_notas = array(" "); //ver como tratar excecao qdo o array for vazio
$aluno1 = new Studente("Edivania", "Costa","edi@brasil.com", "03/04/1988",$arr_cursos, $arr_notas);


//aluno2
$arr_cursos2 = array("PHP", "SQL", "C++", "Javascript");
$arr_notas2 = array(5, 6.7, 9, 10);
$aluno2 = new Studente("Juliana", "Costa","juju@brasil.com", "02/05/1999",$arr_cursos2, $arr_notas2);


print_r($aluno1);
print_r($aluno2);

echo "<hr>";

//testando o inserimento de votos invalidos e validos
$aluno1->addVotoEsami(55);
echo "<hr>";
$aluno1->addVotoEsami(-1);
echo "<hr>";
echo $aluno1->addVotoEsami(5.5);//como 5.5 è voto valido inseriu no array votoEsami
print_r($aluno1);
echo "<hr>";

echo "A media do aluno 1 é: {$aluno1->getMediaEsami()}"."<br>";
echo "A media do aluno 2 é: {$aluno2->getMediaEsami()}"."<br>";



//se quiser formatar a virgula usa printf
printf("A media das notas do aluno 2 é: %.1f\n", $aluno2->getMediaEsami()."<br>");
echo "<hr>";

//testando o inserimento de cursos pro aluno1
echo $aluno1->addCorso("MOngoDB");
print_r($aluno1);


 ?>
</pre>
