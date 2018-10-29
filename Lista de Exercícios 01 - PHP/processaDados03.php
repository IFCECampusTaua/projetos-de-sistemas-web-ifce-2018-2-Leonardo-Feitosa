<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>PHP - Processa Dados - Exercício 03</title>
	</head>
	<body>
		<?php 
			// Captura o valor do campo tipo texto
			$string1 = $_POST["string1"];
			$string2 = $_POST["string2"];

			if ($string1 === $string2) {
				echo "Strings Iguais";
			}else{
				echo "Strings Diferentes";
			}
		?>
	</body>
</html>