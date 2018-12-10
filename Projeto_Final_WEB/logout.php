<?php 
	// Destroi sessão de usuário logado.
	session_start();
	session_destroy();
	header("Location: login-signup.html");
	exit();
?>