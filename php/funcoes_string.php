<?php

/*strtoupper: string maiúscula
strtolower: string minúscula
ucfirst: primeira lestra maiúscula
strlen: contar string
str_replace: substituir "." por ","
substr: retorna uma parte da string*/

//strtolower
$texto = "Curso Completo de PHP";
echo strtolower($texto)<br><br><br>;

//strtoupper
$texto = "Curso Completo de PHP";
echo strtoupper($texto)<br><br><br>;

//ucfirst
$texto = "curso completo de php";
echo ucfirst($texto)<br><br><br>;

//strlen length(comprimento), é bem usado na validação de formulário, ex: qtdade de números do CPF
$texto = "curso completo de php";
echo strlen($texto)<br><br><br>;


//str_replace
/*$texto = "R$12.40";
str_replace(".", ",", $texto);
echo str_replace

$texto ="380.186.688-25";
$cpf = str_replace(".", "", $texto);
$cpf str_re;place(".", "", $cpf);
echo $cpf*/


?>
