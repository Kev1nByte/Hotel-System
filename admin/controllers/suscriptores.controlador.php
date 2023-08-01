<?php

class SuscriptoresControlador{

	//Mostrar Suscriptores

	static public function MostrarSuscriptoresControlador($item, $valor){

		$tablaBD = "suscriptores";

		$respuesta = SuscriptoresModelo::MostrarSuscriptoresModelo($tablaBD, $item, $valor);

		return $respuesta;

	}

    //Eliminar Suscriptores
    
	public function EliminarSuscriptoresControlador(){

		if(isset($_GET["Sid"])){

			$tablaBD = "suscriptores";

			$id = $_GET["Sid"];

			$respuesta = SuscriptoresModelo::EliminarSuscriptoresModelo($tablaBD, $id);

			if($respuesta == true){

				echo '<script>

				window.location = "suscriptores";

				</script>';

			}

		}

	}

}

?>