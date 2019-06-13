<?php 

//var_dump($_FILES);
//exit();

//programa que usa 

if (! isset($_FILES['photo']['error'])){
 header("Non è stato inviato nessun file", true, 401);
 exit();
}

if((isset($_FILES['photo']['error'])) && ($_POST['senha']) == "supersegreto"){
	echo "File enviado";
}

if ($_FILES['photo']['error'] != UPLOAD_ERR_OK) {
 header("Il file inviato non è valido", true, 400);
 exit();
}

$path = "C:\\xampp\\htdocs\\ScriptsPHP\\" . $_FILES['photo']['name'];
if (! move_uploaded_file($_FILES['photo']['tmp_name'], $path)) {
 header("Errore di sistema", true, 500);
 exit();
}
//header("File inviato con successo", true, 200);
