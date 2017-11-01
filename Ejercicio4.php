<?php
/*Escribe un programa que multiplique los 20 primeros números natulars.
 Utilizando el bucle While.
*/
 $numero = 1;
$contador =2;
 while ($contador <= 20) {
 	# code...
 	// $numero  = $numero *$contador;
 	$numero *= $contador;
 	$contador ++;
 	echo $numero."<br/>";
 }

 echo "El resultado de multiplicar los 20 primeros números es:".$numero;
?>