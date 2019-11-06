<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>NVL-PHP-FUNC-3</title>
</head>
<body>
	<?php
		/*NVL-PHP-FUNC-3

		Crear una función que diga dado una frase pasada como argumento nos diga si contiene las 5 vocales o no.

		En este caso queremos que la función devuelva un valor booleano true o false, en caso de que contenga las 5 vocales o false si le falta alguna. También deberemos de llamar a esa función pasándole una cadena y en caso de que el valor devuelto sea true se imprima el mensaje «LA 	PALABRA CONTIENE LAS 5 VOCALES», en caso negativo, debe de mostrar el mensaje «NO CONTIENE TODAS LAS VOCALES».*/
//-------------------------------FUNCION

		function cuentaVocales($string){

			$minuscula=strtolower($string);
			echo $minuscula . "<br>";

			for ($contador=0; $contador < count($string) ; $contador++) { 
				if(substr_count($minuscula, "a") >= 1 && substr_count($minuscula, "e") >= 1 && substr_count($minuscula, "i") >= 1 &&substr_count($minuscula, "o") >= 1 && substr_count($minuscula, "u") >= 1){

					echo "LA PALABRA CONTIENE LAS 5 VOCALES";
					return true;

				}else{

					echo "NO CONTIENE TODAS LAS VOCALES";
					return false;
				}
			
			}
		}
		cuentaVocales("murcielago");



	?>

</body>
</html>