<pre> 
<?php 

require "ITS.php";

class ICT extends ITS
{
	
	//function __construct(argument)
	//{
		# code...
	//}


	public function pegarValor() {
        return "Funcao da Classe Concreta ITC retornada";
    }

}




//CLASSE ABSTRATA NAO SE PODE INSTANCIAR logo instancia sua filha ITS
$arr_cursos = array("Backend", "VisualDesigner", "Development", "Sicurezza");
$arr_notas = array(" "); //ver como tratar excecao qdo o array for vazio

$aluno1 = new ITS("Edivania", "Costa","edi@brasil.com", "03/04/1988",$arr_cursos, $arr_notas);

print_r($aluno1);
$aluno1->pegarValor();

//aluno 2
$arr_cursos2 = array("Sql", "PHP", "C#", "MongoDB");
$arr_notas2 = array(5, 6.7, 9, 10); //ver como tratar excecao qdo o array for vazio

$aluno2 = new ITS("Maria Clara", "Borba","mariazinha@brasil.com", "03/04/1988",$arr_cursos2, $arr_notas2);

print_r($aluno2);
echo $aluno1->pegarValor();










 ?>

 </pre>