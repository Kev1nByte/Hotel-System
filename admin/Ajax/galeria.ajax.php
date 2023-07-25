<?php

require_once "../controllers/galeria.controlador.php";
require_once "../models/galeria.modelo.php";

class AjaxGaleria{

	public $Gid;

	public function EditarGaleriaAjax(){

		$item = "id";
		$valor = $this->Gid;

		$respuesta = GaleriaControlador::VerGaleriaControlador($item, $valor);

		echo json_encode($respuesta);

	}

}

if(isset($_POST["Gid"])){

	$editarG = new AjaxGaleria();
	$editarG -> Gid = $_POST["Gid"];
	$editarG -> EditarGaleriaAjax();

}

?>