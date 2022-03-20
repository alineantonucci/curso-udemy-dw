<?php

require_once("funcoes_desconto.php"); //requerendo uma função

$valor_total = 800;
$desconto = 10;

$valor_com_desconto = $calcula_desconto($valor_total, $desconto);

?>

Valor Total:R$ 800 <?php $valor_total ?> <br>
Valor Desconto: 10% <?php $valor_com_desconto ?> <br>
Valor total com desconto: <?php echo $valor_com_desconto ?>


	?>