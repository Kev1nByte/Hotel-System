<?php

class GaleriaControlador{

	public function CrearGaleriaControlador(){

		if(isset($_POST["tituloN"])){

			$rutaImg = "";

			if(isset($_FILES["imagenN"]["tmp_name"]) && !empty($_FILES["imagenN"]["tmp_name"])){

				if($_FILES["imagenN"]["type"] == "image/png"){

					$nombre = mt_rand(10,999);

					$rutaImg = "views/img/galeria/Gal".$nombre.".png";

					$imagen = imagecreatefrompng($_FILES["imagenN"]["tmp_name"]);

					imagepng($imagen, $rutaImg);

				}

				if($_FILES["imagenN"]["type"] == "image/jpeg"){

					$nombre = mt_rand(10,999);

					$rutaImg = "views/img/galeria/Gal".$nombre.".jpeg";

					$imagen = imagecreatefromjpeg($_FILES["imagenN"]["tmp_name"]);

					imagejpeg($imagen, $rutaImg);

				}

			}

			$tablaBD = "galeria";

			$datosC = array("titulo"=>$_POST["tituloN"], "subtitulo"=>$_POST["subtituloN"], "descripcion"=>$_POST["descripcionN"], "orden"=>$_POST["ordenN"], "imagen"=>$rutaImg);

			$respuesta = GaleriaModelo::CrearGaleriaModelo($tablaBD, $datosC);

			if($respuesta == true){

				echo '<script>

					window.location = "galeria";

				</script>';

			}else{

				echo 'ERROR AL CREAR IMAGEN';

			}

		}

	}

	//Ver Galería

	static public function VerGaleriaControlador($item, $valor){

		$respuesta = GaleriaModelo::VerGaleriaModelo("galeria", $item, $valor);

		return $respuesta;

	}

	//Borrar Galería

	public function BorrarGaleriaControlador(){

		if(isset($_GET["Gid"])){

			$tablaBD = "galeria";
			$id = $_GET["Gid"];

			if($_GET["Gimagen"] != ""){

				unlink($_GET["Gimagen"]);

			}

			$respuesta = GaleriaModelo::BorrarGaleriaModelo($tablaBD, $id);

			if($respuesta == true){

				echo '<script>

					window.location = "galeria";

				</script>';

			}else{

				echo 'ERROR AL BORRAR IMAGEN';

			}

		}

	}

	//Actualizar Galeria

	public function ActualizarGaleriaControlador(){

		if(isset($_POST["Gid"])){

			$rutaImg = $_POST["imagenActual"];

			if(isset($_FILES["imagenE"]["tmp_name"]) && !empty($_FILES["imagenE"]["tmp_name"])){

				if(!empty($_POST["imagenActual"])){

					unlink($_POST["imagenActual"]);

				}else{

					mkdir($direc, 0755);

				}

				if($_FILES["imagenE"]["type"] == "image/png"){

					$nombre = mt_rand(10, 999);

					$rutaImg = "views/img/galeria/Gal".$nombre.".png";

					$imagen = imagecreatefrompng($_FILES["imagenE"]["tmp_name"]);

					imagepng($imagen, $rutaImg);

				}

				if($_FILES["imagenE"]["type"] == "image/jpeg"){

					$nombre = mt_rand(10, 999);

					$rutaImg = "views/img/galeria/Gal".$nombre.".jpg";

					$imagen = imagecreatefromjpeg($_FILES["imagenE"]["tmp_name"]);

					imagejpeg($imagen, $rutaImg);

				}

			}

			$tablaBD = "galeria";

			$datosC = array("id"=>$_POST["Gid"], "titulo"=>$_POST["tituloE"], "subtitulo"=>$_POST["subtituloE"], "descripcion"=>$_POST["descripcionE"], "orden"=>$_POST["ordenE"], "imagen"=>$rutaImg);

			$respuesta = GaleriaModelo::ActualizarGaleriaModelo($tablaBD, $datosC);

			if($respuesta == true){
			
				echo '<script>

					window.location = "galeria";

				</script>';

			}else{

				echo 'ERROR AL ACTUALIZAR IMAGEN';

			}

		}

	}

}

?>