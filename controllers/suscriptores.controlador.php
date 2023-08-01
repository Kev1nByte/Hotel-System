<?php

class SuscriptoresControlador{

	public function EnviarSuscriptorControlador(){

		if(isset($_POST["emailS"])){

			$tablaBD = "suscriptores";

			$datosC = array("email"=>$_POST["emailS"]);

			$respuesta = SuscriptoresModelo::EnviarSuscriptorModelo($tablaBD, $datosC);

			if($respuesta == true){

				echo '<script>

					window.location = "index.php";

				</script>';

			}

		}

	}

}

?>