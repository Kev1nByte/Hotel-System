<?php

require_once "admin/models/ConexionBD.php";

class HDobleModelo extends ConexionBD{

	static public function VerHDobleModelo($tablaBD){

		$pdo = ConexionBD::cBD()->prepare("SELECT imagen, precio, estrellas FROM $tablaBD");

		$pdo->execute();

		return $pdo -> fetch();

		$pdo -> close();

		$pdo = null;

	}

}

?>