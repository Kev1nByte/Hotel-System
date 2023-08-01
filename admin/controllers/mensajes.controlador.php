<?php

class MensajesControlador{

	//Mostrar mensajes
	static public function MostrarMensajesControlador($item, $valor){

		$tablaBD = "mensajes";

		$respuesta = MensajesModelo::MostrarMensajesModelo($tablaBD, $item, $valor);

		return $respuesta;

	}

}

?>
