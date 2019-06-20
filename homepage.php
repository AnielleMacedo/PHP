<?php session_start(); ?>
<html>
<head>
	<title>
	 HOMEPAGE
	</title>

</head>
<body>

	
	<h1 style="text-align: center;"> BEM VINDO AO NOSSO SITE!</h1>

	<?php //echo $_SESSION['email']; 

     //leio o file php
	$data = file_get_contents("info.txt"); //le o file
	$convert = explode(";", $data); //cria array separado por br

	$hash= "$2y$10$7As8Xs7vl/k/wjNNdk1apeI1IZWFaYanHNulbJOPbfFtYndWFmLjC";

	if((isset($_POST['email']) == $convert[0]) && (password_verify("1234", $hash))){
	//if((isset($_POST['email']) == $convert[0]) && (($_POST['senha'])==$convert[1])) {
		echo '<h3> CIAO Dear</h3>'. $convert[0];
		}

	else{
		echo '<h3> Errore!</h3>';
	}

	echo "<hr>";

	//agora transforma senha em  hash
	//echo password_hash($convert[1], PASSWORD_DEFAULT);
	

?>
</body>
</html>