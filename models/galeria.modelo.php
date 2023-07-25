<?php

require_once "admin/models/ConexionBD.php";

class GaleriaModelo extends ConexionBD{

	static public function MostrarGaleriaModelo($tablaBD){

		$pdo = ConexionBD::cBD()->prepare("SELECT imagen, titulo, descripcion, subtitulo FROM $tablaBD ORDER BY orden ASC");

		$pdo -> execute();

		return $pdo -> fetchAll();

		$pdo -> close();

	}

}

?>