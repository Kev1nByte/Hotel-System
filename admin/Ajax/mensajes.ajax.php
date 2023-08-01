<?php

require_once "../controllers/mensajes.controlador.php";
require_once "../models/mensajes.modelo.php";

class MensajesAjax{

	public $Mid;

	public function ResponderMensajesAjax(){

		$item = "id";
		$valor = $this->Mid;

		$respuesta = MensajesControlador::MostrarMensajesControlador($item, $valor);

		echo json_encode($respuesta);

	}

}


if(isset($_POST["Mid"])){

	$responderModelo = new MensajesAjax();
	$responderModelo -> Mid = $_POST["Mid"];
	$responderModelo -> ResponderMensajesAjax();

}