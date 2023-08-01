<?php

require_once "ConexionBD.php";

class MensajesModelo extends ConexionBD{

	//Mostrar Mensajes

	static public function MostrarMensajesModelo($tablaBD, $item, $valor){

		if($item == null){

			$pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD ORDER BY fecha DESC");

			$pdo -> execute();

			return $pdo -> fetchAll();

		}else{

			$pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD WHERE $item = :$item");

			$pdo -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$pdo -> execute();

			return $pdo -> fetch();

		}

		$pdo -> close();
		$pdo = null;

	}

}

?>