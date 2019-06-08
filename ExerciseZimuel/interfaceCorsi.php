
<pre> 
<?php //declare(strict_types=1);

//OBS: conflito tra <pre> e strict_types 

/**
 * Interfaccia per la gestione dei corsi
 * Enrico Zimuel (enrico.zimuel@its-ictpiemonte.it)
 * Implementar a classe Studente com a seguinte interface abaixo:
 */

interface CorsiInterface
{
    
    public function addCorso(string $corso): bool;
    public function getCorsi(): array;
    public function addVoto(string $corso, int $voto): bool;
    public function getMediaEsami():?float;
}




class Studente implements CorsiInterface
{
	

	public $nome = "Anielle Macedo";
	public $corsi = [];
	


	/*function __construct(string $nome,$cursos, $votos)
	{
		$this->nome = $nome;
		$this->corsi= [];
		$this->votoEsami = [];
	}*/


//add corso singolarmente
	public function addCorso($nuovoCurso): bool{

		if(!isset($this->corsi[$nuovoCurso])){
			$this->corsi[$nuovoCurso]= "";
			//array_push($this->corsi, $novoCurso);
			echo "Corso aggiunto"."<br>";   
			return true;
		}else{
			echo "Impossibile aggiungere un corso già esistente!"."<br>";
			return false;
			
		}
	}


	public function getCorsi(): array{
		return $this->corsi;
	}


	public function addVoto(string $corso, int $voto): bool{
		//se il corso esiste aggiunge un voto al corso esistente
		if (isset($this->corsi[$corso]) && ($voto>0 && $voto<= 30)) {
			$this->corsi[$corso]= $voto;
			return true;
			}
		//se nao existe nao adiciona
		else{
			echo "Impossibile aggiungere un voto; voto invalido o corso inesistente!"."<br>";
			return false;
		}
			
	}

	public function getMediaEsami():?float{ 
		if(empty($this->corsi)){
			return null;
		}
		else{
			$soma = array_sum($this->corsi);
			$count = count($this->corsi);
			return $soma/$count;
		}
	}


}





//crio l'oggetto
$estudante = new Studente();

//add corsi
echo $estudante->addCorso('MONGODB');
echo $estudante->addCorso('C#');
echo $estudante->addCorso('PHP');
echo $estudante->addCorso('HTML');
echo $estudante->addCorso('PHP');
echo "<hr>";

print_r($estudante);
echo "<hr>";


//add voti ai corsi
echo $estudante->addVoto('MONGODB',25); 
echo $estudante->addVoto('C#',29);
echo $estudante->addVoto('PHP',30);
echo $estudante->addVoto('HTML',18);
echo $estudante->addVoto('MONGODB',29);//sostituissce
echo $estudante->addVoto('SQL',31);    //corso non esiste

print_r($estudante);
echo "<hr>";

//$arr_notas = array(5, 6.7, 9, 10);

//retorna un array con tutti i corsi e voti corrispondenti
print_r($estudante->getCorsi());
echo "<hr>";

//ritorna un float con la media dei voti dello studente
echo "La media dei voti dello studente è: {$estudante->getMediaEsami()}"; 
echo "<hr>";



//print_r($estudante);





?>
</pre>