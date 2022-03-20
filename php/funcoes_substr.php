<?php

//substr: retorna uma parte da string
          //0123456789..........(posições das strings)  
$texto = "Entenda porque se smartphone esquenta tant, se você tem um smartphone."

echo substr($texto, 0, 2)<br><br>;
echo substr($texto, 2, 5)<br><br>;
$noticia = substr($texto, 0, 40)<br><br>;
echo $noticia." ...";

?>
