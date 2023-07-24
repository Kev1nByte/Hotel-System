<?php

require_once "../controllers/slide.controlador.php";

require_once "../models/slide.modelo.php";

class SlideAjax{

	public $Sid;

	public function EditarSlideAjax(){

		$item = "id";
		$valor = $this->Sid;

		$respuesta = SlideControlador::VerSlideControlador($item, $valor);

		echo json_encode($respuesta);

	}

}

if(isset($_POST["Sid"])){

    $editarS = new SlideAjax();
    $editarS -> Sid = $_POST["Sid"];
    $editarS -> EditarSlideAjax();

}

?>