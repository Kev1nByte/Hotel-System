<?php

class ServiciosControlador{

	static public function MostrarServiciosControlador($item, $valor){

		$tablaBD = "servicios";

		$respuesta = ServiciosModelo::MostrarServiciosModelo($tablaBD, $item, $valor);

		return $respuesta;

	}

	// Actualizar Servicios

	static public function actualizarServiciosControlador(){

		if(isset($_POST["iconoE"])){

			$tablaBD = "servicios";

			$datosC = array("id"=>$_POST["Sid"], "icono"=>$_POST["iconoE"], "titulo"=>$_POST["tituloE"], "descripcion"=>$_POST["descripcionE"]);

			$respuesta = ServiciosModelo::actualizarServiciosModelo($tablaBD, $datosC);

			if($respuesta == true){

				echo '<script>

				window.location = "servicios";
				</script>';

			}

		}

	}

}

?>