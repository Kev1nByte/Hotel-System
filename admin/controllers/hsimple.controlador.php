<?php

class HSimpleControlador{

	public function VerHSimpleControlador(){

		$tablaBD = "hsimple";

		$respuesta = HSimpleModelo::VerHSimpleModelo($tablaBD);

		echo '<h3>Imagen Principal:</h3>';

			if($respuesta != "" ){

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



}

?>