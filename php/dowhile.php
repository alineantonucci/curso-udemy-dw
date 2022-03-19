<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Do whilw</title>
	</head>

	<body>
		<?php

		/*do {
		} while( condicao ); do while executa ao menos uma vez o código, difertente do while,
		 que sse a condição for falsa, nem executa.*/
	
		$num = 1;
		do {
			echo 'Teste: '.$num;
			$num = $num +1;
			//break
			//continue
		while($num <10 );

		}
		?>

	</body>
</html>