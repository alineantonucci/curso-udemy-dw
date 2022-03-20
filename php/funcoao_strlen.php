<?php
/*strlen length(comprimento), é bem usado na validação de formulário, ex: qtdade de números do CPF
$texto = "curso completo de php";
echo strlen($texto)<br><br><br>;*/

$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '' ;
$total_string_cpf = strlen( $cpf );

if($total_string_cpf != 11){
	echo "CPF inválido";
}
?>
<form method="post" action="">
	<label>CPF
	<input type="text" name="cpf">
	</label>

	<input type="submit" name="cadastrar">


</form>

