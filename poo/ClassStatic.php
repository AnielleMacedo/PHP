<?php 

class Documento
{
	
	private $numero;

    //get
	public function getNumero(){
		return $this->numero;
	}

    //set
	public function setNumero($numero){
		//antes de atribuir o valor do cpf com o Set controlamos se è valido c a funcao validar
		//p acessar metodo estatico usa nomeclasse :: metodo
		$result= Documento::validarCpf($numero);

		if ($result==false)
			throw new Exception("CPF informado è INVALIDO", 1);
			
		else
        	$this->numero = $numero;
	}



    //criando metodo ESTATICO que è acessado sem precisar instanciar a classe
    //recebe como parametro o cpf digitado pelo usuario
	public static function validarCpf($cpf):bool{

		//funcao que valida se um cpf è valido
		 if(empty($cpf)) {
        	return false;
    	}
 
		    $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;

		    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
		     
		    
		    if (strlen($cpf) != 11) {
		        echo "length";
		        return false;
		    }
		    
		    else if ($cpf == '00000000000' || 
		        $cpf == '11111111111' || 
		        $cpf == '22222222222' || 
		        $cpf == '33333333333' || 
		        $cpf == '44444444444' || 
		        $cpf == '55555555555' || 
		        $cpf == '66666666666' || 
		        $cpf == '77777777777' || 
		        $cpf == '88888888888' || 
		        $cpf == '99999999999') {
		        return false;

		     } else {   
		         
		        for ($t = 9; $t < 11; $t++) {
		             
		            for ($d = 0, $c = 0; $c < $t; $c++) {
		                $d += $cpf{$c} * (($t + 1) - $c);
		            }
		            $d = ((10 * $d) % 11) % 10;
		            if ($cpf{$c} != $d) {
		                return false;
		            }
		        }
		 
		        return true;
    }
}

}

/*
//instancia classe
$cpf = new Documento();
//dou valor ao atributo
$cpf->setNumero("07407616418");
//stampo
var_dump($cpf->getNumero());
echo $cpf->getNumero();

*/
//vantagem do metodo estatico que vc n precisa criar o objeto p chama-lo
var_dump(Documento::validarCpf("07407616666")); //tem q ser um cap valido aki

 ?>