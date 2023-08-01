<?php

require_once "ConexionBD.php";

class SuscriptoresModelo extends ConexionBD{

	//Mostrar Suscriptores

	static public function MostrarSuscriptoresModelo($tablaBD, $item, $valor){

		if($item != null){

			$pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD WHERE $item = :$item");

			$pdo -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$pdo -> execute();

			return $pdo -> fetch();

		}else{

			$pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD");

			$pdo -> execute();

			return $pdo -> fetchAll();

		}

		$pdo -> close();
		$pdo = null;

	}

}

?>