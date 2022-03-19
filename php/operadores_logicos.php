<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>IF e Else</title>
	</head>

	<body>
		<?php

		//operadores lógicos
		// AND: E - verdadeiro, se todas as expressões forem verdadeiras
		// &&: E - verdadeiro, se todas as expressões forem verdadeiras
		// OR: Ou - verdadeiro, pelo menos uma das expressões forem verdadeira
		// ||: Ou - verdadeiro, pelo menos uma das expressões forem verdadeira
		// XOR: Ou - verdadeiro, se uma das expressões for verdadeira
		// !: Negação - inverte o resultado

		//f e v = f
		if(5 == 3 && 5 > 4){
			echo 'Entrou no bloco if';
		} else {
			echo ' Entrou no bloco else'
		}
		
		'<br />';

		//v e v = v
		if(5 <> 3 && 5 > 4){
			echo 'Entrou no bloco if';
		} else {
			echo ' Entrou no bloco else';
		}

		'<br />';

		//v e v = v
		if(5 <> 3 AND 5 > 4){
			echo 'Entrou no bloco if';
		} else {
			echo ' Entrou no bloco else';
		}

		'<br />';

		//f ou v = v
		if(5 == 3 || 5 > 4){
			echo 'Entrou no bloco if';
		} else {
			echo ' Entrou no bloco else';
		}

		'<br />';

		//f ou v = v
		if(5 == 3 OR 5 > 4){
			echo 'Entrou no bloco if';
		} else {
			echo ' Entrou no bloco else';
		}

		'<br />';

		//f ou v = v
		if(5 == 3 OR 5 > 4){
			echo 'Entrou no bloco if';
		} else {
			echo ' Entrou no bloco else';
		}

		'<br />';

		//f ou f = f
		if(5 == 3 OR 5 < 4){
			echo 'Entrou no bloco if';
		} else {
			echo ' Entrou no bloco else';
		}

		'<br />';
			
		//f xor f = f
		if(5 == 3 XOR 5 < 4){
			echo 'Entrou no bloco if';
		} else {
			echo ' Entrou no bloco else';
		}

		'<br />';

		//v xor v = f
		if(5 != 3 XOR 5 <> 4){
			echo 'Entrou no bloco if';
		} else {
			echo ' Entrou no bloco else';
		}

		'<br />';
		
		//f xor v = v
		if(5 == 3 XOR 'z' == 'z'){
			echo 'Entrou no bloco if';
		} else {
			echo ' Entrou no bloco else';
		}

		'<br />';

		//negação
		if(!(5 == 3){
			echo 'Entrou no bloco if';
		} else {
			echo ' Entrou no bloco else';
		}

		'<br />';

		//() precedência de operação
		//(v e v) => or f = f)
		if((2 == 2 && 3 == 3) || 5 <> 5){
			echo 'Entrou no bloco if';
		} else {
			echo ' Entrou no bloco else';
		}

		'<br />';


		?>

	</body>
</html>