<?php  
	include("verifica_login.php");

	// Vai descobrir se o usuário está logado. Se estiver, a variável $nomedousuario vai ter um valor. Se não, ela não terá um valor.
	if (isset($_SESSION["usuario"])) {
		$nomedousuario = $_SESSION["usuario"];
	}

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
	 $sql = "SELECT * FROM users WHERE nome_user = '{$nomedousuario}'";
	 // Armazena os resultados da consulta SQL ao BD
	 $result = mysqli_query($conn, $sql);

	 if (mysqli_num_rows($result) > 0) {
	    // dados de saída de cada linha
		    while($linha = mysqli_fetch_assoc($result)) {
				$id = $linha["id"];   
		       	$user = $linha["nome_user"];
		       	$email = $linha["email"];
		       	$senha1 = $linha["senha1"];
		       	$senha2 = $linha["senha2"];
		    }
	}else{
	    echo "Nenhum resultado encontrado.";
	}

	// sql para deletar registro no BD
	$sqlDelete = "DELETE FROM users WHERE id = '{$id}'";
	mysqli_query($conn, $sqlDelete);
	mysqli_close($conn);
	header("Location: login-signup.html");
?>