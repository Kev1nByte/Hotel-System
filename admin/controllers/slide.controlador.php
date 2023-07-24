<?php

class SlideControlador{

	public function CrearSlideControlador(){

		if(isset($_POST["titularN"])){

			$rutaImg = "";

			if(isset($_FILES["imagenN"]["tmp_name"]) && !empty($_FILES["imagenN"]["tmp_name"])){

				if($_FILES["imagenN"]["type"] == "image/jpeg"){

					$nombre = mt_rand(10,999);

					$rutaImg = "views/img/slide/S".$nombre.".jpg";

					$imagen = imagecreatefromjpeg($_FILES["imagenN"]["tmp_name"]);

					imagejpeg($imagen, $rutaImg);

				}

				if($_FILES["imagenN"]["type"] == "image/png"){

					$nombre = mt_rand(10,999);

					$rutaImg = "views/img/slide/S".$nombre.".png";

					$imagen = imagecreatefrompng($_FILES["imagenN"]["tmp_name"]);

					imagepng($imagen, $rutaImg);

				}

			}


			$tableBD = "slide";

			$datosC = array("titular"=>$_POST["titularN"], "descripcion"=>$_POST["descripcionN"], "orden"=>$_POST["ordenN"], "imagen"=>$rutaImg);

			$respuesta = SlideModelo::CrearSlideModelo($tableBD, $datosC);

			if($respuesta == true){

				echo '<script>
						window.location = "slide";
					</script>';

			}else{

				echo "ERROR AL CREAR SLIDE";

			}

		}

	}

}

?>