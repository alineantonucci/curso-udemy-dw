<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Foreach</title>
	</head>

	<body>
		<?php

		//função sem retorno
		function exibir_boas_vindas($nome='indefinido'){
			echo "Bem vindo ao curso php, ".$nome;
		}

		//função com retorno
		function calcular_soma(){
			return 1+2
;		}

		//função com retorno
		function calcular_soma($numero1,$numero2){
			return $numero1+$numero2;
;		}
		
		//chamar a função sem retorno
		exibir_boas_vindas();

		//chamar a função com retorno
		echo exibir_boas_vindas('Paulo');

		?>

	</body>
</html>