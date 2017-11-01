<?php
/*
	Crear un array llamado meses y que almacene el nombre de los doce meses del año.

	Recorrerlo con for para mostrar por pantalla los doce meses.

	Igual que el anterior per usando el bulce forach.
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

	foreach ($meses as $item) {
		# code...
		echo $item."<br/>";
	}
?>