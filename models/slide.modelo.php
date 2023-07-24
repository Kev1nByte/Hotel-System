<?php

require_once "admin/models/ConexionBD.php";

class SlideModelo extends ConexionBD{

	static public function MostrarSlideModelo($tablaBD){

		$pdo = ConexionBD::cBD()->prepare("SELECT titular, descripcion, orden, imagen FROM $tablaBD ORDER BY orden ASC");

		$pdo -> execute();

		return $pdo->fetchAll();

		$pdo->close();

	}

}

?>