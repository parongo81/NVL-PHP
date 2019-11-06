<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>NVL-PHP-FUNC-1</title>
</head>
<body>
	<?php
		/*Escribir una función que diga cuántas letras A contiene una palabra pasada como argumento

		Es decir que si la función se llamase cuentaLetraA:

		cuentaLetraA("Upgrade Hub");

		Debería de decir que tiene 1 letra A.*/


		function cuentaLetraA($string){

			$minuscula=strtolower($string);
			$letrasA=(substr_count($minuscula, "a"));
				
				echo "El texto introducido contiene $letrasA vocal 'A'" ;
		}
		cuentaLetraA("Upgrade Hub")

	?>

</body>
</html>