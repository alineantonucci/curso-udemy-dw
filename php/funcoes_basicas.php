<?php

/*isset()verifica se uma função foi inniciada
$valor = 'aline';
isset( $valor);
true*/
//vai retornar verdadeiro se tiver algum valor, senão vai retornar falso

$valor = 'qualquer valor aqui dentro';
if( isset( $valor) ){
    echo 'Variável iniciada';
}

/*empty: retorna true sempre que tiver uma variável vazia 
true - > ''. 0, '0', false, null, array()
false - >*/

$valor = '';

if( empty( $valor ) ){
    echo "Variável vazia";
}

/* is_numeric:teste se a variável é uma string numérica ou um número(), retornar verdadeiro quando for número
e retornará false quando for string numérica */ 
$valor = 120;
is_numeric( $valor)
if( is_numeric( $valor) ){
    echo "Valor numérico";
}


?>