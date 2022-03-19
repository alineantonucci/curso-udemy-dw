<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>While</title>
	</head>

	<body>
		<?php

		
		/*while( condicao ){

		}*/

		$num = 1;
		while( $num <10 ) {

			
			$num = $num + 1;
		
			if($num == 3){
				continue;
			}


			echo $num;
			echo '<br />';
		}
	
		?>

	</body>
</html>