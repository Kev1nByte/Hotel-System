<?php

class HTripleControlador{

	public function VerHTripleControlador(){

		$tablaBD = "htriple";

		$respuesta = HTripleModelo::VerHTripleModelo($tablaBD);

		echo '<h3>Imagen Principal:</h3>';

			if($respuesta ["imagen"] != "" ){

				echo '<img src="'.$respuesta["imagen"].'" class="img-thumbnail" width="250px">';

			}else{

				echo '<img src="views/img/default.png" class="img-thumbnail" width="250px">';

			}
			
			echo'<hr>
			<h3>Estrellas:</h3>

			<div class="price-list">
				<ul>';

				if($respuesta["estrellas"] == "1"){

					echo '<li><i class="fa fa-star"></i></li>';

				}else if($respuesta["estrellas"] == "2"){

					echo '<li><i class="fa fa-star"></i></li>
						<li><i class="fa fa-star"></i></li>';

				}else if($respuesta["estrellas"] == "3"){

					echo '<li><i class="fa fa-star"></i></li>
						<li><i class="fa fa-star"></i></li>
						<li><i class="fa fa-star"></i></li>';

				}else if($respuesta["estrellas"] == "4"){

					echo '<li><i class="fa fa-star"></i></li>
						<li><i class="fa fa-star"></i></li>
						<li><i class="fa fa-star"></i></li>
						<li><i class="fa fa-star"></i></li>';

				}else{

					echo '<li><i class="fa fa-star"></i></li>
						<li><i class="fa fa-star"></i></li>
						<li><i class="fa fa-star"></i></li>
						<li><i class="fa fa-star"></i></li>
						<li><i class="fa fa-star"></i></li>';

				}
				
					
			echo '</ul>
			</div>

			<hr>
			<h3>Precio por Noche:</h3>

			<h2>$ '.$respuesta["precio"].'</h2>';

	}

    //Editar HD

	public function EditarHTripleControlador(){

		$tablaBD = "htriple";

		$id = "1";

		$respuesta = HTripleModelo::EditarHTripleModelo($tablaBD, $id);

		echo '<div class="modal-body">
					
				<div class="box-body">
					
					<div class="form-group">
						
						<h3>Imagen:</h3>

						<input type="file" name="imagenE">';

						if($respuesta["imagen"] != ""){

							echo '<img src="'.$respuesta["imagen"].'" class="img-thumbnail " width="250px">';

						}else{

							echo '<img src="views/img/default.png" class="img-thumbnail" width="250px">';
                            
						}

						echo '<input type="hidden" name="imagenActual" value="'.$respuesta["imagen"].'">

					</div>

					<div class="form-group">
						
						<h3>Estrellas:</h3>

						<select class="form-control input-lg" name="estrellasE">
							
							<option>'.$respuesta["estrellas"].'</option>

							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>

						</select> 

					</div>


					<div class="form-group">
						
						<h3>Precio:</h3>

						<input type="text" name="precioE" class="form-control input-lg" value="'.$respuesta["precio"].'">

						<input type="hidden" name="HDid" class="form-control input-lg" value="'.$respuesta["id"].'">

					</div>

				</div>

			</div>';

	}

    //Actualizar HD

	public function ActualizarHTripleControlador(){

		if(isset($_POST["precioE"])){

			$rutaImg = $_POST["imagenActual"];

			if(isset($_FILES["imagenE"]["tmp_name"]) && !empty($_FILES["imagenE"]["tmp_name"])){

				if(!empty($_POST["imagenActual"])){

					unlink($_POST["imagenActual"]);

				}else{

					mkdir($direc, 0755);

				}


				if($_FILES["imagenE"]["type"] == "image/jpeg"){

					$nombre = mt_rand(10, 999);

					$rutaImg = "views/img/HTriple/HD".$nombre.".jpg";

					$imagen = imagecreatefromjpeg($_FILES["imagenE"]["tmp_name"]);

					imagejpeg($imagen, $rutaImg);

				}

				if($_FILES["imagenE"]["type"] == "image/png"){

					$nombre = mt_rand(10, 999);

					$rutaImg = "views/img/HTriple/HD".$nombre.".png";

					$imagen = imagecreatefrompng($_FILES["imagenE"]["tmp_name"]);

					imagepng($imagen, $rutaImg);

				}

			}


			$tablaBD ="HTriple";

			$datosC = array("id"=>$_POST["HDid"], "imagen"=>$rutaImg, "estrellas"=>$_POST["estrellasE"], "precio"=>$_POST["precioE"]);

			$respuesta = HTripleModelo::ActualizarHTripleModelo($tablaBD, $datosC);

			if($respuesta == true){

				echo '<script>

				window.location = "htriple";

				</script>';

			}

		}

	}

}

?>