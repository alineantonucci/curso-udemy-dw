<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Arrays While, do while e for</title>
	</head>

	<body>
		<?php

		$noticias = array();

		$noticias[1]['título 1'] = 'título da notícia 1';
		$noticias[1]['conteúdo 1'] = 'contéudo dessa notícia 1';
		
		$noticias[2]['título 2'] = 'título da notícia 2';
		$noticias[2]['conteúdo 2'] = 'contéudo dessa notícia 2';

		$noticias[3]['título 3'] = 'título da notícia 3';
		$noticias[3]['conteúdo 3'] = 'contéudo dessa notícia 3';

		//var_dump($noticias);

		/*
		while
		$idx =1;
		while($idx <=3){
			echo $noticias[1]['titulo']/
			echo '<br >';
			echo $noticias[1]['conteudo'];
			echo '<br >';

			$idx = $idx + ;
		*/

		/*
		do while
		$idx =1;
		do{
			echo $noticias[$idx]['titulo'];
			echo '<br >';
			echo $noticias[$idx]['conteudo'];
			echo '<br >';

			$idx = $idx + ;
		}while($idx <=); )
		*/

		for($idx = 1; $idx <=; $idx = $idx + ){
			echo  $noticias[$idx]['titulo'];
			echo '<br >';
			echo $noticias[$idx]['conteudo'];
			echo '<br >';

		}
	
		?>

	</body>
</html>