<?php

require_once "ConexionBD.php";

class GaleriaModelo extends ConexionBD{

	static public function CrearGaleriaModelo($tablaBD, $datosC){

		$pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD (titulo, subtitulo, descripcion, orden, imagen) VALUES (:titulo, :subtitulo, :descripcion, :orden, :imagen)");

		$pdo -> bindParam(":titulo", $datosC["titulo"], PDO::PARAM_STR);
		$pdo -> bindParam(":subtitulo", $datosC["subtitulo"], PDO::PARAM_STR);
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