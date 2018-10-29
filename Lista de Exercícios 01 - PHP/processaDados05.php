<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>PHP - Processa Dados - Exercício 05</title>
	</head>
	<body>
		<?php 
			// Captura o valor do campo tipo número
			$nota1 = $_POST["nota1"];
			$nota2 = $_POST["nota2"];
			$nota3 = $_POST["nota3"];
			$nota4 = $_POST["nota4"];

			$media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

			echo "Média do aluno: $media";
			echo "<br><br>";

			if ($media >= 7.0) {
				echo "Aprovado!";
			}else{
				echo "Reprovado!";
			}
		?>
	</body>
</html>