<?php

require_once "ConexionBD.php";

class ServiciosModelo extends ConexionBD{

	static public function MostrarServiciosModelo($tablaBD, $item, $valor){

		if($item == null){

			$pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD");

			$pdo -> execute();

			return $pdo -> fetchAll();

		}else{

			$pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD WHERE $item = :$item");

			$pdo -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$pdo -> execute();

			return $pdo -> fetch();

		}

	}

	// Actualizar Servicios

	static public function actualizarServiciosModelo($tablaBD, $datosC){

		$pdo = ConexionBD::cBD()->prepare("UPDATE $tablaBD SET icono = :icono, titulo = :titulo, descripcion = :descripcion WHERE id = :id");

		$pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_INT);
		$pdo -> bindParam(":icono", $datosC["icono"], PDO::PARAM_STR);
		$pdo -> bindParam(":titulo", $datosC["titulo"], PDO::PARAM_STR);
		$pdo -> bindParam(":descripcion", $datosC["descripcion"], PDO::PARAM_STR);

		if($pdo->execute()){

			return true;

		}else{

			return false;

		}

		$pdo -> close();

	}

}

?>