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

    //Editar Nosotros
	public function EditarNosotrosControlador(){

		$tablaBD = "nosotros";
		$id = "1";

		$respuesta = NosotrosModelo::EditarNosotrosModelo($tablaBD, $id);

		echo '<div class="modal-body">
            
	            <div class="box-body">
	              
	              <div class="form-group">
	                
	                <h2>Título:</h2>
	                <input type="text" class="form-control input-lg" name="tituloE" required="" value="'.$respuesta["titulo"].'">

	                <input type="hidden" name="Nid" value="'.$respuesta["id"].'">

	              </div>

	               <div class="form-group">
	                
	                <h2>Introducción:</h2>
	                <textarea class="form-control" name="introduccionE" required>
	                '.$respuesta["introduccion"].'
	                </textarea>

	              </div>

	               <div class="form-group">
	                
	                <h2>Descripción:</h2>
	                <textarea class="form-control" name="descripcionE" required>
	                '.$respuesta["descripcion"].'
	                </textarea>

	              </div>

	              <div class="form-group">
	                
	                <h2>Imagen:</h2>

	                <input type="file" name="imagenE">';

	                if($respuesta["imagen"] != ""){

	                	echo '<img src="'.$respuesta["imagen"].'" class="img-thumbnail visor" width="270px">';

	                }else{

	                	echo '<img src="views/img/default.png" class="img-thumbnail visor" width="270px">';

	                }
	                

	              echo '<input type="hidden" name="imagenActual" value="'.$respuesta["imagen"].'">


	              </div>

	            </div>

	          </div>

	          <div class="modal-footer">
	            
	            <button class="btn btn-success" type="submit">Guardar</button>

	            <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>

	          </div>';

	}

}

?>