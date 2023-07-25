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

} 

?>