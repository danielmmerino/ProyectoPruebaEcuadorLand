<?php 
			$email = $_POST["email"];
			$contrasena = $_POST["contrasena"];

			if ($email != "" && $contrasena != "") {
				
				echo "Correcto";
			}
			else{
				echo "Mal";
			}

 ?>