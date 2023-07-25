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

    //Ver Galería

	static public function VerGaleriaModelo($tablaBD, $item, $valor){

		if($item != null){

			$pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD WHERE $item = :$item");

			$pdo -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$pdo -> execute();

			return $pdo -> fetch();

		}else{

			$pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD ORDER BY orden ASC");

			$pdo -> execute();

			return $pdo -> fetchAll();

		}

		$pdo -> close();

	}

	//Borrar Imagen

	static public function BorrarGaleriaModelo($tablaBD, $id){

		$pdo = ConexionBD::cBD()->prepare("DELETE FROM $tablaBD WHERE id = :id");

		$pdo -> bindParam(":id", $id, PDO::PARAM_INT);

		if($pdo -> execute()){

			return true;

		}else{

			return false;
		}

		$pdo -> close();

	}

}

?>