<?php
/*
	Crear un array llamado meses y que almacene el nombre de los doce meses del año.

	Recorrerlo con for para mostrar por pantalla los doce meses.
*/

	$meses = array("Enero",
					"Febrero",
					"Marzo",
					"Abril",
					"Mayo",
					"Junio",
					"Julio",
					"Agosto",
					"Septiembre",
					"Octubre",
					"Noviembre",
					"Diciembre" );

	for ($i=0; $i< count($meses) ; $i++) {
		# code...
		echo $meses[$i]."<br/>";
	}

?>