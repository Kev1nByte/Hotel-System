<?php

require_once "ConexionBD.php";

class SlideModelo extends ConexionBD{

	static public function CrearSlideModelo($tableBD, $datosC){

		$pdo = ConexionBD::cBD()->prepare("INSERT INTO $tableBD (titular, descripcion, orden, imagen) VALUES (:titular, :descripcion, :orden, :imagen)");

		$pdo -> bindParam(":titular", $datosC["titular"], PDO::PARAM_STR);
		$pdo -> bindParam(":descripcion", $datosC["descripcion"], PDO::PARAM_STR);
		$pdo -> bindParam(":orden", $datosC["orden"], PDO::PARAM_STR);
		$pdo -> bindParam(":imagen", $datosC["imagen"], PDO::PARAM_STR);

		if($pdo -> execute()){

			return true;

		}else{

			return false;

		}

		$pdo -> close();

	}

}

?>