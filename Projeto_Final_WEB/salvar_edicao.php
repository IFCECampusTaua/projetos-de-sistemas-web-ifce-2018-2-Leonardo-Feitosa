<?php
	session_start();
	$user = $_POST["newUser"];
	$email = $_POST["newEmail"];
	$senha = $_POST["newSenha1"]; 
	$id = $_POST["id"];

	// Abrindo uma conexão com o BD
  	$servername = "localhost";
  	$username = "root";
	$password = "";
	$dbname = "usuarios";

  	// Criando conexão
  	$conn = mysqli_connect($servername, $username, $password, $dbname);

 	// Check connection
  	if (!$conn) {
    	die("Falha na conexão: " . mysqli_connect_error());
  	}

  	// Consulta SQL
  	$sql = "UPDATE users SET nome_user = '{$user}', email = '{$email}', senha1 = '{$senha}', senha2 = '{$senha}' WHERE users.id = '{$id}'";
  	
  	$_SESSION["usuario"] = $user;
	mysqli_query($conn, $sql);
	mysqli_close($conn);

	header("Location: index.php");
?>