<?php  
	session_start();
	session_destroy();
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Tela Login</title>
	</head>
	<body>
			<form action="checa_login.php" method="POST">
				<p>Login: <input type="text" name="login"></p>
				<p>Senha: <input type="password" name="senha"></p>
				<p><input type="submit"></p>
			</form>
	</body>
</html>