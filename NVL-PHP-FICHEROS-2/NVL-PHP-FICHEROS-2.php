<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>NVL-PHP-FICHEROS-1</title>
</head>
<body>
	<?php
	function reemplazar($original, $modificado, $palabraOriginal, $palabraSustituir){

		fopen($original, "r");
		fclose($original);
		copy($original, $modificado);

		//$fd=fopen($modificado, "r+");
			
		echo file_put_contents($modificado, str_replace($palabraOriginal, $palabraSustituir, file_get_contents($modificado)));
		//fclose ($fd);

  		}

  		reemplazar('el_Quijote.txt', 'quijoteMOOdificado.txt', 'Sancho', 'Morty');


	?>

</body>
</html>