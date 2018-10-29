<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>PHP - Processa Dados - Exercício 04</title>
	</head>
	<body>
		<?php 
			// Captura o valor do campo tipo texto
			$string1 = $_POST["string"];
			$charBusca = $_POST["charBusca"];

			$tamString = strlen($string1);
			echo "<br>";

			$numCharBusca = 0;
			for ($i=0; $i < $tamString; $i++) { 
				// retorna um pedaço da string
				$retorno = substr($string1, $i, 1);
				if ($retorno == $charBusca) {
					$numCharBusca++;
				}
			}
			echo "Número de ocorrência(s) do caracter \"$charBusca\": $numCharBusca";
		?>
	</body>
</html>