<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>NVL-PHP-FUNC-2</title>
</head>
<body>
	<?php
		/*Modificar el ejercicio anterior para que se le pueda pasar también como segundo argumento la letra a buscar, y así no sea siempre la letra A.

		Es decir que si la función se llamase cuentaLetras:

		cuentaLetras("Upgrade Hub", 'u');

			Debería de decir que tiene 2 letras U.*/


		function cuentaLetraA($string, $letra){
			$minuscula=strtolower($string);
			echo $minuscula .'<br>';

			$vocalA=(substr_count($minuscula, "a"));

			$minus=(strtolower($letra));
			$argum2=(substr_count($minuscula, $minus));
				
				echo "El texto introducido contiene $vocalA vocal 'A' y $argum2 letras 'U'" ;
		}
		cuentaLetraA("Upgrade Hub", "U")

	?>

</body>
</html>