<?php

require_once "ConexionBD.php";

class HSimpleModelo extends ConexionBD{

	static public function VerHSimpleModelo($tablaBD){

		$pdo = ConexionBD::cBD()->prepare("SELECT id, imagen, estrellas,precio FROM $tablaBD");

		$pdo -> execute();

		return $pdo->fetch();

		$pdo -> close();

	}

}

?>