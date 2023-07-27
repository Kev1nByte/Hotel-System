<?php

require_once "ConexionBD.php";

class HTripleModelo extends ConexionBD{

	static public function VerHTripleModelo($tablaBD){

		$pdo = ConexionBD::cBD()->prepare("SELECT id, imagen, estrellas,precio FROM $tablaBD");

		$pdo -> execute();

		return $pdo->fetch();

		$pdo -> close();

	}

	//Editar HTriple

	static public function EditarHTripleModelo($tablaBD, $id){

		$pdo = ConexionBD::cBD()->prepare("SELECT id, precio, imagen, estrellas FROM $tablaBD WHERE id = :id");

		$pdo -> bindParam(":id", $id, PDO::PARAM_INT);

		$pdo -> execute();

		return $pdo->fetch();

		$pdo -> close();

		$pdo = null;

	}

	//Actualizar HTriple

	static public function ActualizarHTripleModelo($tablaBD, $datosC){

		$pdo = ConexionBD::cBD()->prepare("UPDATE $tablaBD SET precio = :precio, estrellas = :estrellas, imagen = :imagen WHERE id = :id");

		$pdo -> bindParam(":precio", $datosC["precio"], PDO::PARAM_STR);
		$pdo -> bindParam(":estrellas", $datosC["estrellas"], PDO::PARAM_STR);
		$pdo -> bindParam(":imagen", $datosC["imagen"], PDO::PARAM_STR);
		$pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_INT);

		if($pdo -> execute()){

			return true;

		}else{

			return false;
            
		}

		$pdo -> close();
		$pdo = null;

	}

}

?>