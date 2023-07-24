<?php

class NosotrosControlador{

	public function VerNosotrosControlador(){

		$tablaBD = "nosotros";

		$respuesta = NosotrosModelo::VerNosotrosModelo($tablaBD);

		echo '<h2>Título:</h2>
                <h4>'.$respuesta["titulo"].'</h4>
                <hr>

                <h2>Introducción:</h2>
                <h4>'.$respuesta["introduccion"].'</h4>
                <hr>

                <h2>Descripción:</h2>
                <h4>'.$respuesta["descripcion"].'</h4>
                <hr>

                <h2>Imagen:</h2>';

                if($respuesta["imagen"] != ""){

                    echo '<img src="'.$respuesta["imagen"].'" class="img-thumbnail" width="250px;">';

                }else{

                    echo '<img src="views/img/default.png" class="img-thumbnail" width="250px;">';

                }


	}

}

?>