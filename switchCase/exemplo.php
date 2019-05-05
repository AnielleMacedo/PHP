<?php

//recuperando o dia da semana com switch case atraves do date do seu pc

//https://www.php.net/manual/pt_BR/function.date.php

$diaDaSemana= date("w");//retorna o dia da semana atual

switch ($diaDaSemana) {
	case '0':
		echo "Domingo";
		break;    //usa o break p ele n executar tb o proximo case
	case '1':
		echo "Segunda";
		break;
	case '2':
		echo "Terca";
		break;
	case '3':
		echo "Quarta";
		break;
	case '4':
		echo "Quinta";
		break;
	case '5':
		echo "Sexta";
		break;
	case '6':
		echo "Sabado";
		break;
	default:
		echo "Dia Invalido";
		break;
}


echo "<br>";

$diaDaSemana= date("D");//retorna o dia semana atual

switch ($diaDaSemana) {
	case 'Sun':
		echo "Domingo";
		break;    
	case 'Mon':
		echo "Segunda";
		break;
	case 'Tue':
		echo "Terca";
		break;
	case 'Wed':
		echo "Quarta";
		break;
	case 'Thu':
		echo "Quinta";
		break;
	case 'Fri':
		echo "Sexta";
		break;
	case 'Sar':
		echo "Sabado";
		break;
	default:
		echo "Dia Invalido";
		break;
}






?>