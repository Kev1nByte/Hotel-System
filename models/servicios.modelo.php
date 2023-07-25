<?php

require_once "admin/models/ConexionBD.php";

class ServiciosModelo extends ConexionBD{

	static public function VerServiciosModelo($tablaBD){

		$pdo = ConexionBD::cBD()->prepare("SELECT icono, titulo, descripcion FROM $tablaBD");

		$pdo -> execute();

		return $pdo->fetchAll();

		$pdo -> close();

	}

}

?>