
<div class="content-wrapper">
	
	<section class="content-header">
		<h1>Gestor de Servicios</h1>
	</section>

	<section class="content">
		
		<div class="box box-success">
			
			<div class="box-body">
				
				<div class="row TB">

					<div class="col-md-4 col-sm-6">
						
						<a href="#" data-toggle="modal" data-target="#EditarServicio">
							
							<i class="fa fa-home" style="font-size: 25px;"></i>

							<h4>Título</h4>

							<p>Descripción</p>

						</a>

					</div>

                    <div class="col-md-4 col-sm-6">
						
						<a href="#" data-toggle="modal" data-target="#EditarServicio">
							
							<i class="fa fa-home" style="font-size: 25px;"></i>

							<h4>Título</h4>

							<p>Descripción</p>

						</a>

					</div>

                    <div class="col-md-4 col-sm-6">
						
						<a href="#" data-toggle="modal" data-target="#EditarServicio">
							
							<i class="fa fa-home" style="font-size: 25px;"></i>

							<h4>Título</h4>

							<p>Descripción</p>

						</a>

					</div>
                    
                    <div class="col-md-4 col-sm-6">
						
						<a href="#" data-toggle="modal" data-target="#EditarServicio">
							
							<i class="fa fa-home" style="font-size: 25px;"></i>

							<h4>Título</h4>

							<p>Descripción</p>

						</a>

					</div>

                    <div class="col-md-4 col-sm-6">
						
						<a href="#" data-toggle="modal" data-target="#EditarServicio">
							
							<i class="fa fa-home" style="font-size: 25px;"></i>

							<h4>Título</h4>

							<p>Descripción</p>

						</a>

					</div>

                    <div class="col-md-4 col-sm-6">
						
						<a href="#" data-toggle="modal" data-target="#EditarServicio">
							
							<i class="fa fa-home" style="font-size: 25px;"></i>

							<h4>Título</h4>

							<p>Descripción</p>

						</a>

					</div>
					
				</div>

			</div>

			<div class="box-footer">
				<center><h3>Haga clic en el servicio que deseé editar.</h3></center>
			</div>

		</div>

	</section>

</div>


<div id="EditarServicio" class="modal fade" rol="dialog">
	
	<div class="modal-dialog">
		
		<div class="modal-content">
			
			<form rol="form" method="post">
				
				<div class="modal-body">
					
					<div class="box-body">
						
						<div class="form-group">
							
							<h2>Icono:</h2>
							<input type="text" name="iconoE" id="iconoE" class="form-control input-lg">

							<input type="hidden" name="Sid" id="Sid">

						</div>

						<div class="form-group">
							
							<h2>Título:</h2>
							<input type="text" name="tituloE" id="tituloE" class="form-control input-lg">

						</div>

						<div class="form-group">
							
							<h2>Descripción:</h2>
							<textarea name="descripcionE" id="descripcionE"></textarea>

						</div>

					</div>

					<div class="modal-footer">
						
						<button type="submit" class="btn btn-success">GUARDAR</button>

						<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

					</div>

				</div>

			</form>

		</div>

	</div>

</div>