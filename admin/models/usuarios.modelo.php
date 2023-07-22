<?php

require_once "ConexionBD.php";

class UsuariosModelo extends ConexionBD{

	//Ingresar al gestor

	public static function IngresoUsuariosModelo($datosC, $tablaBD){

		$pdo = ConexionBD::cBD()->prepare("SELECT usuario, clave, foto, rol, id FROM $tablaBD WHERE usuario = :usuario");

		$pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);

		$pdo -> execute();

		return $pdo -> fetch();

		$pdo -> close();

	}

	//Ver Usuario

	static public function VerUsuariosModelo($tablaBD){

		$pdo = ConexionBD::cBD()->prepare("SELECT id, usuario, clave, foto, rol FROM $tablaBD");

		$pdo -> execute();

		return $pdo -> fetchAll();

		$pdo -> close();

	}

	//Crear Usuarios

	static public function CrearUsuariosModelo($tablaBD, $datosC){

		$pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD(usuario, clave, rol, foto) VALUES (:usuario, :clave, :rol, :foto)");

		$pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
		$pdo -> bindParam(":clave", $datosC["clave"], PDO::PARAM_STR);
		$pdo -> bindParam(":rol", $datosC["rol"], PDO::PARAM_STR);
		$pdo -> bindParam(":foto", $datosC["foto"], PDO::PARAM_STR);

		if($pdo -> execute()){

			return true;

		}else{

			return false;

		}

		$pdo -> close();

	}

	//Borrar Usuarios

	static public function BorrarUsuariosModelo($tablaBD, $datosC){

		$pdo = ConexionBD::cBD()->prepare("DELETE FROM $tablaBD WHERE id = :id");

		$pdo -> bindParam(":id", $datosC, PDO::PARAM_INT);

		if($pdo -> execute()){

			return true;

		}else{

			return false;

		}

		$pdo -> close();

	}

	//Llamar datos para editarlos

	static public function EditarUsuariosModelo($tablaBD, $item, $valor){

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

	}

	//Actualizar Usuarios

	static public function ActualizarUsuariosModelo($tablaBD, $datosC){

		$pdo = ConexionBD::cBD()->prepare("UPDATE $tablaBD SET usuario = :usuario, clave = :clave, rol = :rol, foto = :foto WHERE id = :id");

		$pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_INT);
		$pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
		$pdo -> bindParam(":clave", $datosC["clave"], PDO::PARAM_STR);
		$pdo -> bindParam(":rol", $datosC["rol"], PDO::PARAM_STR);
		$pdo -> bindParam(":foto", $datosC["foto"], PDO::PARAM_STR);


		if($pdo -> execute()){

			return true;

		}else{

			return false;

		}

		$pdo -> close();

	}

	//Ver Perfil del Usuario Actual

	static public function VerPerfilModelo($tablaBD, $id){

		$pdo = ConexionBD::cBD()->prepare("SELECT id, usuario, clave, foto FROM $tablaBD WHERE id = :id");

		$pdo -> bindParam(":id", $id, PDO::PARAM_INT);

		$pdo -> execute();

		return $pdo -> fetch();

		$pdo -> close();

	}

}

?>