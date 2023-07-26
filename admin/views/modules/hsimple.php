

<div class="content-wrapper">
	
	<section class="content-header">
		
		<h1>Gestor de Habitación Simple</h1>

	</section>

	<section class="content">
			
		<div class="row">
			
			<div class="col-md-6 col-xs-12">
				
				<div class="box box-danger">
					
					<div class="box-header with-border">
						
						<h2>Datos de Inicio</h2>

					</div>

					<div class="box-body">
						
						<?php

						$verHS = new HSimpleControlador();
						$verHS -> VerHSimpleControlador();

						?>
						

					</div>

					<div class="box-footer">
						
						<button class="btn btn-success EditarHS btn-lg" data-toggle="modal" data-target="#EditarHS"><i class="fa fa-pencil"></i> Editar</button>

					</div>

				</div>

			</div>

		</div>

	</section>

</div>


<div id="EditarHS" class="modal fade" role="dialog">
	
	<div class="modal-dialog">
		
		<div class="modal-content">
			
			<form role="form" method="post" enctype="multipart/form-data">
				
				<div class="modal-body">
					
					<div class="box-body">
						
						<div class="form-group">
							
							<h3>Imagen:</h3>

							<input type="file" name="imagenE">

							<img src="views/img/default.png" class="img-thumbnail" width="250px">

							<input type="hidden" name="imagenActual">

						</div>

						<div class="form-group">
							
							<h3>Estrellas:</h3>

							<select class="form-control input-lg" name="estrellasE">
								
								<option>2</option>

								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>

							</select> 

						</div>


						<div class="form-group">
							
							<h3>Precio:</h3>

							<input type="text" name="precioE" class="form-control input-lg">

						</div>

					</div>

				</div>


				<div class="modal-footer">
					
					<button type="submit" class="btn btn-success">GUARDAR</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">CANCELAR</button>

				</div>

			</form>

		</div>

	</div>

</div>