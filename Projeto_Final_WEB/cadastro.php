<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="imagens/iflogo.ico">
	<!-- Framework Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

    <!-- Framework jQuery -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

	<!-- Script auxiliar para o Framework Bootstrap -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <style type="text/css">
    	div#aviso{
			text-align: center;
			font-size: 14pt;
			color: black;
		}	
    </style>
</head>
<body>
<?php
	// Iniciando uma nova sessão
	session_start();

	// Recebendo os dados do formulário "cadastro"
	$user = $_POST["user"];
	$email = $_POST["email"];
	$senha1 = $_POST["senha1"];
	$senha2 = $_POST["senha2"];

	// Abrindo uma conexão com o BD
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "usuarios";

	// Creando conexão
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Checar conexão
	if ($conn->connect_error){
	    die("Falha de conexão: " . $conn->connect_error);
	}

	// Verifica se um registro já existe no BD
	$sqlnome = "SELECT * FROM users WHERE nome_user = '{$user}'";
	$sqlemail = "SELECT * FROM users WHERE email = '{$email}'";
	$result_nome = $conn->query($sqlnome);
	$result_email = $conn->query($sqlemail);

	if ($result_nome->num_rows >= 1 || $result_email->num_rows >= 1) {  
	echo "<div class='alert alert-danger' role='alert' id='aviso'>
  			Este registro já existe! <a href='login-signup.html' class='alert-link'>Retornar para a página de login/cadastro.</a></div>";
		//header("Location: login-signup.html");
	    exit();
	}else{
		// Inserindo dados na tabela "users" do BD "USUARIOS"
		$insert = "INSERT INTO users (nome_user, email, senha1, senha2) VALUES ('$user', '$email', '$senha1', '$senha2')";

		if($conn->query($insert) === TRUE){
			$_SESSION["usuario"] = $user;
		    echo"<script language='javascript' type='text/javascript'>
		    		alert('Usuário cadastrado com sucesso!');
		    	</script>";
		    header("Location: index.php");
		    exit();
		}else{
			echo "<div class='alert alert-danger' role='alert' id='aviso'>
  			Erro ao cadastrar usuário! Tente novamente! <a href='login-signup.html' class='alert-link'>Retornar para a página de login.</a></div>";
		    //header("Location: index.php");
		    //echo "Erro: " . $insert . "<br>" . $conn->error;
		    exit();
		}
	}
	$conn->close();
?>
</body>
</html>