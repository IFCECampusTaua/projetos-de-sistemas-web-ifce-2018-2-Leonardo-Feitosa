<?php
// Start the session
session_start();

$teste = $_SESSION["logou"];
$senha = $_SESSION["senha"];

if (!empty($teste) && $teste == 1) {
	echo "Logado com sucesso";
}else{
	header('location: formulario.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<a href="formulario.php">Sair</a>
</body>
</html>