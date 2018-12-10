<?php
	// Inicia uma nova sessão 
	session_start();
	// Verifica se não existe uma sessão de usuário...
	if(!$_SESSION["usuario"]) {
		header("Location: login-signup.html");
		exit();
	}
?>