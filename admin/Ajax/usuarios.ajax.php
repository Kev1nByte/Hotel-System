<?php

require_once "../controllers/usuarios.controlador.php";

require_once "../models/usuarios.modelo.php";

class UsuariosAjax{

	public $Uid;

	public function EditarUsuariosAjax(){

		$item = "id";
		$valor = $this->Uid;

		$respuesta = UsuariosControlador::EditarUsuariosControlador($item, $valor);

		echo json_encode($respuesta);

	}

}

if(isset($_POST["Uid"])){

	$editarU = new UsuariosAjax();
	$editarU -> Uid = $_POST["Uid"];
	$editarU -> EditarUsuariosAjax();

}

?>