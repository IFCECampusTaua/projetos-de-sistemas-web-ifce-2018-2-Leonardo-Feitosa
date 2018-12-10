<?php 
	include("verifica_login.php");
?>

<?php
 // Você vai descobrir se o usuário está logado. Se estiver, a variável $nomedousuario vai ter um valor. Se não, ela não terá um valor.
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
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		$id = $row["id"];   
       	$user = $row["nome_user"];
       	$email = $row["email"];
       	$senha1 = $row["senha1"];
       	$senha2 = $row["senha2"];
    }
} else {
    echo "Nenhum resultado encontrado.";
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="imagens/iflogo.ico">
	<title>Editar Dados Cadastrais</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
	 <!-- Framework Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <!-- Framework jQuery -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<!-- Script auxiliar para o Framework Bootstrap -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <!-- Plugin jQuery Validation -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
	<!-- Métodos adicionais -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>
	<!-- Mensagens em PT-BR -->
	<script type="text/javascript" src="js_validation/localization/messages_pt_BR.js"></script>
	<script type="text/javascript" src="js_validation/validar_novos_dados.js"></script>

	<!-- Formatação pura da tela modal -->
	<style type="text/css">
	    body {
			font-family: 'Varela Round', sans-serif;
		}
		.modal-login {
			width: 500px;
		}
		.modal-login .modal-content {
			border-radius: 1px;
			border: none;
		}
		.modal-login .modal-header {
	        position: relative;
			justify-content: center;
	        background: #f2f2f2;
		}
	    .modal-login .modal-body {
	        padding: 30px;
	    }
	    .modal-login .modal-footer {
	        background: #f2f2f2;
	    }
		.modal-login h4 {
			text-align: center;
			font-size: 26px;
		}
	    .modal-login label {
	        font-weight: bold;
	        font-size: 13pt;
	    }
		.modal-login .form-control, .modal-login .btn {
			min-height: 38px;
			border-radius: 2px; 
		}
		.modal-login .hint-text {
			text-align: center;
		}
		.modal-login .close {
	        position: absolute;
			top: 15px;
			right: 15px;
		}
	    .modal-login .checkbox-inline {
	        margin-top: 12px;
	    }
	    .modal-login input[type="checkbox"]{
	        margin-top: 2px;
	    }
		.modal-login .btn {
	        min-width: 100px;
			background: #3498db;
			border: none;
			line-height: normal;
		}
		.modal-login .btn:hover, .modal-login .btn:focus {
			background: #248bd0;
		}
		.modal-login .hint-text a {
			color: #999;
		}
		.trigger-btn {
			display: inline-block;
			margin: 100px auto;
			font-size: 15pt;
		}
		.error{
    		color: red;
		}
	</style>
</head>

<body>
<div class="text-center">
	<!-- Button HTML (to Trigger Modal) -->
	<a href="#myModal" class="trigger-btn" data-toggle="modal">CLIQUE AQUI PARA EDITAR SUA CONTA</a>
</div>

<!-- Modal HTML -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<form action="salvar_edicao.php" method="POST" id="editarDados">
				<div class="modal-header">				
					<h4 class="modal-title">Editar Dados</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">				
					<div class="form-group">
						<label>Nome de Usuário</label>
						<input type="text" class="form-control" name="newUser" value="<?php echo $user; ?>">
					</div>
					<div class="form-group">
						<div class="clearfix">
							<label>E-mail</label>	
						</div>
						<input type="text" class="form-control" name="newEmail" value="<?php echo $email; ?>">
					</div>
                    <div class="form-group">
						<div class="clearfix">
							<label>Senha</label>	
						</div>
						<input type="text" class="form-control" name="newSenha1" id="newSenha1" value="<?php echo $senha1; ?>">
					</div>
                    <div class="form-group">
						<div class="clearfix">
							<label>Repita a Senha</label>	
						</div>
						<input type="text" class="form-control" name="newSenha2" id="newSenha2" value="<?php echo $senha2; ?>">
					</div>
					<div class="form-group">
						<div class="clearfix">
							<label>Identificador</label>	
						</div>
						<input type="text" class="form-control" name="id" value="<?php echo $id; ?>" required="required" readonly>
					</div>
				</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-primary pull-right" value="Salvar Alterações">
				</div>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		// Exibir modal automaticamente quando a página carregar...
	    $("myModal").modal("show");
	})
</script>  
</body>
</html>                          		                            