<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
<html>
	<body>

	<?php
		// Set session variables
		$login = $_POST["login"];
		$senha = $_POST["senha"];
		$_SESSION["senha"] = $senha;
		$logou=0;
		if ($login == "aula" && $senha == "php") {
			session_start();
			$_SESSION["logou"] = 1;
			header('location: home.php');		
			
		}else{
			header('location: formulario.php');
		}
	?>
	</body>
</html>