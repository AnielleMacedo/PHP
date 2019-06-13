<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tela de Login</title>
</head>
<body>
	<!--crio o form e em action coloco o nome do arquivo php o qual irei mandar os dados deste file index.html. A variavel name è importante pois sera usada no codigo php p poder collegaarsi-->
	<form action="login.php" method="POST" />
	User: <input type="text" name="email" />	
	Password: <input type="password" name="senha" />
	<!--crio um button que ira enviar oa dados-->
	<input type="submit" value="Enter" />
	</form>
</body>
</html>