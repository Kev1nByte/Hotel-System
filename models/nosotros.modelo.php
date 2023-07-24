<?php

require_once "admin/models/ConexionBD.php";

class NosotrosModelo extends ConexionBD{

	static public function MostrarNosotrosModelo($tablaBD){

		$pdo = ConexionBD::cBD()->prepare("SELECT titulo, introduccion, descripcion, imagen FROM $tablaBD");

		$pdo->execute();

		return $pdo->fetch();

		$pdo -> close();

	}

}

?>