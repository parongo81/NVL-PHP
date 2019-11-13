<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>NVL-PHP-FICHEROS-3</title>
</head>
<body>
	<?php
		$hoy=date("Y-m-j H:i");
		echo "Hoy es $hoy";
		mkdir($hoy, 0777);
		$fichero="documento.doc";
		$ficheroModif="$hoy/document.doc.modificado";
		copy($fichero,$ficheroModif);

	?>

</body>
</html>