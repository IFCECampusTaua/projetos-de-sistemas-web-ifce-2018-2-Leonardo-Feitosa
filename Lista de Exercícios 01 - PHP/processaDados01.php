<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>PHP - Processa Dados - Exercício 01</title>
	</head>
	<body>
		<?php 
			// Captura o valor do campo "altura"
			echo $_POST["altura"];
			$altura = $_POST["altura"];
			echo "<br>";

			// Captura o valor do campo "sexo"
			echo $_POST["sexo"];
			$sexo = $_POST["sexo"];
			echo "<br>";
			echo "<br>";
			
			if ($sexo == "M") {
				$pesoIdeal = (72.7 * $altura) - 58;
				echo "Seu peso ideal: $pesoIdeal";
			}else if ($sexo == "F") {
				$pesoIdeal = (62.1 * $altura) - 44.7;
				echo "Seu peso ideal: $pesoIdeal";
			}
		?>
	</body>
</html>