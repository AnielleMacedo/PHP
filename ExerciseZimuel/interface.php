
<?php //declare(strict_types=1);
/**
 * Interfaccia per la gestione degli studenti
 * author Enrico Zimuel (enrico.zimuel@its-ictpiemonte.it)
 */




interface StudenteInterface
{
    public function setNome(string $nome);
    public function getNome(): string;
    public function setCognome(string $cognome): bool;
    public function getCognome(): string;
    public function setEmail(string $email): bool;
    public function getEmail(): string;
    public function setDataDiNascita(int $giorno, int $mese, int $anno): bool;
    public function getDataDiNascita(): string; // nel formato "gg/mm/AAAA"
}


//crio a classe que implementa a interface
class Studente implements StudenteInterface
{
	

	//crio os atributos necessarios p poder usar nos metodos
	protected $nome = '';
	protected $cognome = '';
	protected $email = '';
	protected $dataDiNascita = '';
	


	//implemento obrigat. TODOS os metodos da INTERFACE
	public function setNome(string $nome){
		$this->nome=$nome;
		//QUAAL ESCOPO DE RETORNAR SEMPRE BOOL??
	}
    
    public function getNome() : string {
 		return $this->nome;
 	}


    public function setCognome(string $cognome): bool{
    	 if(empty($cognome)) {
        	return false;
   	    }
   	    $this->cognome=$cognome;
   	    	return true;
   	    }


    public function getCognome(): string{
    	return $this->cognome;

    }
    public function setEmail(string $email): bool{
    	$this->email=$email;
    	return true;
    }


    public function getEmail(): string{
    	return $this->email;
    }

    public function setDataDiNascita(int $giorno, int $mese, int $anno): bool{
    	$this->dataDiNascita = $giorno . "/".$mese."/". $anno;
    	//$this->dataDiNascita = date("$giorno.$mese.$anno");
    	
    	return true;
    }

    public function getDataDiNascita(): string{
    	return $this->dataDiNascita;
    	
    }
}


//intancio a classe p fazer output
//SEM USAR valor booleano
$estudante = new Studente();
$estudante->setNome("ANIELLE");
echo $estudante->getNome();


//USANDO valor booleano
echo "<br>";
$estudante->setCognome("GOMES MACEDO");
echo $estudante->getCognome();

echo "<br>";
$estudante->setEmail("anielelovely18@hotmail.com");
echo $estudante->getEmail();


echo "<br>";
$estudante->setDataDiNascita(03,04,1988);
echo $estudante->getDataDiNascita();

echo "<br>";
echo $today = date("m.d.Y");     

//doubts:	pergunta SO STRICT LINES; pq usar BOOLENAO; e como gestir formato da data
//Fatal error: strict_types declaration must be the very first statement in the script in C:\xampp\htdocs\POO\interface.php on line 2









//obs quando o metodo retornar BOOL o tipo de return seraa true ou false
?>