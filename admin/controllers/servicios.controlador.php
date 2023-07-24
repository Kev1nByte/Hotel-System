<?php

class ServiciosControlador{

	static public function MostrarServiciosControlador($item, $valor){

		$tablaBD = "servicios";

		$respuesta = ServiciosModelo::MostrarServiciosModelo($tablaBD, $item, $valor);

		return $respuesta;

	}

}

?>