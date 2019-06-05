<?php
/**
 * Interfaccia per la gestione dei corsi
 * Enrico Zimuel (enrico.zimuel@its-ictpiemonte.it)
 */
declare(strict_types=1);
interface CorsiInterface
{
    //public function getMediaCorsi(): float;
    //public function addCorso(string $corso): bool;
    //public function getCorsi(): array;
    //public function addVoto(string $corso, int $voto): bool;
    public function getMediaEsami():?float;
}




class Studente implements CorsiInterface
{
	
	//crio os atributos necessarios p poder usar nos metodos
	public $nome;
	public $cognome;
	public $email;
	public $anoNascita;
	public $corsi = [];
	public $votoEsami = [];

//criar construtor

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





//instancio a classe

$arr_notas2 = array(5, 6.7, 9, 10);
$estudante = new Studente( $arr_notas2);	
echo $estudante->getMediaEsami();