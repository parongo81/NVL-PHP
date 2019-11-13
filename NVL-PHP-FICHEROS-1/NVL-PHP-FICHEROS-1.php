<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>NVL-PHP-FICHEROS-1</title>
</head>
<body>
	<?php

		$fichero= fopen("el_Quijote.txt", "r"); 
  		$palabra= NULL;	
  		$archivo="el_Quijote.txt";
  		while (!feof($archivo)) {
  			
  			$contenido = fread($fichero, filesize($archivo));
  			
			//$contenido= strtolower($contenido); 
			$palabra=substr_count($contenido, "molino");
  			break;
	 		}
	 		fclose($fichero);
  			echo "El Quijote tiene $palabra veces la palabra 'molino'"; 
			
			

  		
	?>

</body>
</html>