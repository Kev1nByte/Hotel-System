<?php

require_once "ConexionBD.php";

class HSimpleModelo extends ConexionBD{

	static public function VerHSimpleModelo($tablaBD){

		$pdo = ConexionBD::cBD()->prepare("SELECT id, imagen, estrellas,precio FROM $tablaBD");

		$pdo -> execute();

		return $pdo->fetch();

		$pdo -> close();

	}

	//Editar HS

	static public function EditarHSimpleModelo($tablaBD, $id){

		$pdo = ConexionBD::cBD()->prepare("SELECT id, precio, imagen, estrellas FROM $tablaBD WHERE id = :id");

		$pdo -> bindParam(":id", $id, PDO::PARAM_INT);

		$pdo -> execute();

		return $pdo->fetch();

		$pdo -> close();

		$pdo = null;

	}

}

?>