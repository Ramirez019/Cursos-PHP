<?php
/*Escribe un programa que impirma por pantalla los cuadrados (el número
multiplicado por sí mismo) de los 30 primeros números naturales.

Modifica el ejercicio anterior para que mueste al lado de cada cuadrado
si es in número par o impar.
*/

for($i=1;$i<=30;$i++){
	$cuadrado = ($i*$i);
 	echo "el cuadrado de ".$i." es ".$cuadrado;
 	if($cuadrado%2==0)
 	{
 		echo " y es par.";
 	}
 	else
 	{
		echo " y es IMPAR.";
 	}
 	echo "<br/>";
 }
?>