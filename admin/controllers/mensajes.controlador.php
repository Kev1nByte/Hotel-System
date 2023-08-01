<?php

class MensajesControlador{

	//Mostrar mensajes
	static public function MostrarMensajesControlador($item, $valor){

		$tablaBD = "mensajes";

		$respuesta = MensajesModelo::MostrarMensajesModelo($tablaBD, $item, $valor);

		return $respuesta;

	}

	//Eliminar Mensajes

	public function EliminarMensajesControlador(){

		if(isset($_GET["Mid"])){

			$tablaBD = "mensajes";

			$id = $_GET["Mid"];

			$respuesta = MensajesModelo::EliminarMensajesModelo($tablaBD, $id);

			if($respuesta == true){

				echo '<script>

					window.location = "mensajes";

				</script>';

			}

		}

	}

}

?>
