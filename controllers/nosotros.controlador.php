<?php

class NosotrosControlador{

	public function MostrarNosotrosControlador(){

		$respuesta = NosotrosModelo::MostrarNosotrosModelo("nosotros");

		echo ' <img src="admin/'.$respuesta["imagen"].'" alt="" class="img-responsive img-fluid" git />
				</div>
			</div> 
			<div class="col-lg-6 welcome_left">
				<h3 class="agileits-title">'.$respuesta["titulo"].'</h3>
				<h4>'.$respuesta["introduccion"].'</h4>
				<p>'.$respuesta["descripcion"].'</p>  ';

	}

}

?>