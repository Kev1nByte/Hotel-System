<?php

require_once "admin/models/ConexionBD.php";

class HSuitModelo extends ConexionBD{

	static public function VerHSuitModelo($tablaBD){

		$pdo = ConexionBD::cBD()->prepare("SELECT imagen, precio, estrellas FROM $tablaBD");

		$pdo->execute();

		return $pdo -> fetch();

		$pdo -> close();

		$pdo = null;

	}

}

?>