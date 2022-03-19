<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>For</title>
	</head>

	<body>
		<?php

		/*
		for(variavel; condicao; incremento){

		}
		posso colocar a variável dentro do for.
		a condição é vericada a cada interçã
		o for organiza em uma linha só das ineterações
		*/

		for($num = 10; $num > 0; $num = $num - 2) {
			echo $num. '<br  />';
			//break
			//contiue
		}
		?>

	</body>
</html>