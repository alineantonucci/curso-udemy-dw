<?php

/*strtotime: converte uma string para um time
2015-02-02
pega uma data qualquer e converte em um número único, sendo possível fazer cálculos
*/

$data_inicial = '2018-07-18';
$data_final = '2021-11-13';

$time_inicial =strtotime($data_inicial);
$time_final =strtotime($data_final);

$diferenca_times = $time_final - $time_inicial;
echo $diferenca_times;


//diferença em dias de duas datas
$diaSegundos = 24*60*60;
echo $diaSegundos<br>;
$diferenca_dias = $diferenca_times / $diaSegundos;
echo $diferenca_dias;


?>
