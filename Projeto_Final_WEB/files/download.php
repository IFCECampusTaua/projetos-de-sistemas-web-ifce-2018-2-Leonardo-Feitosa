<?php
	
	$GerParam = filter_input(INPUT_GET, "file", FILTER_DEFAULT);

	//FUNÇÃO RESPONSÁVEL POR ENVIAR HEADRES AO SERVIDOR
	function InputHeader($FILENAME, $FILEPATH){
		header("Content-disposition: attachment; filename={$FILENAME}");
		header('Content-type: application/pdf');
		readfile($FILEPATH);
	}

	// CONTROLANDO DE FLUXO, CASO EXISTA MAIS ARQUIVOS
	switch ($GerParam) {
		case "1":
			$FILENAME = "Sistema-Web-para-a-divulgacao-de-eventos.pdf";
			$FILEPATH = "($FILENAME)";
			InputHeader($FILENAME, $FILEPATH);
			break;
	}

?>