<?php

require_once "admin/models/ConexionBD.php";

class SuscriptoresModelo extends ConexionBD{

	static public function EnviarSuscriptorModelo($tablaBD, $datosC){

		$pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD (email) VALUES (:email)");

		$pdo -> bindParam(":email", $datosC["email"], PDO::PARAM_STR);

		if($pdo -> execute()){

			return true;

		}

		$pdo -> close();
		$pdo = null;

	}

}

?>