<?php 

//var_dump($_POST['email']);

//$email = $_POST['email'];
//$senha = $_POST['senha'];

//confirma se existe e se nao esta vazio e a senha deve ter ao menos 8 digitos
if((isset($_POST['email']) == true) && (strlen($_POST['senha'])>=8)) {
	$email= $_POST['email'];
	$senha = $_POST['senha'];

	//valida se è um email com a funcao pronta de php filter_validate
	if (filter_var($email, FILTER_VALIDATE_EMAIL)== true){
		echo '<h3> Usuario està Logado</h3>';
	} 

	else if (empty($_POST['email']) || empty($_POST['senha']) ) {
		echo '<h3> Ci sono campi vuoti!</h3>';
	} 
		
	else{
		echo '<h3> Usuario ou Senha incorreto!</h3>';
	}
}

else{
	echo '<h4> Digitos para a senha insuficiente ao menos 8 caracteres!</h4>';
}




