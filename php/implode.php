<?php

//implode

$string = "20/03/2022"
$retorno = explode("/", $string);

$nova_string = implode(".", $retorno);
var_export($retorno);
echo $nova_string;

?>
