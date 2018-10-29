<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>PHP - Processa Dados - Exercício 02</title>
	</head>
	<body>
		<?php 
			// Captura o valor do campo "numero"
			$num = $_POST["numero"];
		    $calc = 1;
		    while ($num > 1){
		        $calc *= $num;
		        $num--;
    		}
    		echo $calc;
		?>
	</body>
</html>