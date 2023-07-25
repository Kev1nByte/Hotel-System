<?php

require_once "../controllers/servicios.controlador.php";

require_once "../models/servicios.modelo.php";

class AjaxServicios{

	public $Sid;

	public function EditarServiciosAjax(){

		$item = "id";
		$valor = $this->Sid;

		$respuesta = ServiciosControlador::MostrarServiciosControlador($item, $valor);

		echo json_encode($respuesta);

	}

}

if(isset($_POST["Sid"])){

	$servicios = new AjaxServicios();
	$servicios -> Sid = $_POST["Sid"];
	$servicios -> EditarServiciosAjax();

}

?>