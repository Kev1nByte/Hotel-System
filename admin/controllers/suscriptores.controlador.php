<?php

class SuscriptoresControlador{

	//Mostrar Suscriptores

	static public function MostrarSuscriptoresControlador($item, $valor){

		$tablaBD = "suscriptores";

		$respuesta = SuscriptoresModelo::MostrarSuscriptoresModelo($tablaBD, $item, $valor);

		return $respuesta;

	}

}

?>