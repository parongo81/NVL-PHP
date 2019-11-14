	
<?php
	
		$usuario = $_POST["mail"];
		$password = $_POST["contraseña"];
		$repite = $_POST["repitaContraseña"];

		if (empty($usuario)) {
				echo "introduzca mail" . "<br>";
		}elseif (strlen($password) >= 8 && $password === $repite) {
		
				echo "«Datos procesados correctamente»";
		}else{
				echo "Error en el formulario";
		}	




	
					
?>