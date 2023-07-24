<?php

require_once "ConexionBD.php";

class NosotrosModelo extends ConexionBD{

	static public function VerNosotrosModelo($tablaBD){

		$pdo = ConexionBD::cBD()->prepare("SELECT id, titulo, introduccion, descripcion, imagen FROM $tablaBD");

		$pdo -> execute();

		return $pdo ->fetch();

		$pdo -> close();

	}

    //Editar Nosotros

	static public function EditarNosotrosModelo($tablaBD, $id){

		$pdo = ConexionBD::cBD()->prepare("SELECT id, titulo, introduccion, descripcion, imagen FROM $tablaBD WHERE id = :id");

		$pdo -> bindParam(":id", $id, PDO::PARAM_INT);

		$pdo -> execute();

		return $pdo ->fetch();

		$pdo -> close();

	}

}

?>