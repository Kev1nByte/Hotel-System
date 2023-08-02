<div class="content-wrapper">
  
  <section class="content-header">
    
    <h1>Ajustes Generales del Sitio</h1>

  </section>

  <section class="content">
    
    <div class="row">
      
      <div class="col-md-6 col-xs-12">
        
        <div class="box box-success">
          
          <div class="box-body">
            
            <h2>Favicon:</h2>

            <img src="views/img/default.png" class="img-responsive" width="20px">

            <hr>

            <h2>Titular:</h2>

            <h4>Hotel Byte - Turismo</h4>

            <hr>

            <h2>Logotipo:</h2>

            <img src="views/img/default.png" class="img-responsive">

          </div>

          <div class="box-footer">
            
            <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#EditarGenerales"><i class="fa fa-pencil"></i> Editar</button>

          </div>

        </div>

      </div>

      <div class="col-md-6 col-xs-12">
        
        <div class="box box-warning">
          
          <div class="box-header with-border">
            
            <h2>Contactos</h2>

          </div>

          <div class="box-body">
            
            <h2>Ubicación:</h2>
            <h4>New York, San Francisco 440</h4>

            <hr>

            <h2>Teléfono:</h2>
            <h4>154 005566 </h4>
            <hr>

            <h2>Correo:</h2>
            <h4>admin@hotelzone.com</h4>

          </div>

          <div class="box-footer">
            
            <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#EditarContactos"><i class="fa fa-pencil"></i> Editar</button>

          </div>

        </div>

      </div>

      <div class="col-md-6 col-xs-12">
        
        <div class="box box-primary">
          
          <div class="box-header with-border">
            
            <h2>Redes Sociales</h2>

          </div>

          <div class="box-body">
            
            <div class="form-group">
              
              <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-facebook" style="font-size: 20px"></i></span>

                <input type="text" class="form-control input-lg" readonly="">

                <button class="btn btn-success" data-toggle="modal" data-target="#EditarRedes"><i class="fa fa-penci"></i> Editar</button>

              </div>

              <br>

               <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-instagram" style="font-size: 20px"></i></span>

                <input type="text" class="form-control input-lg" readonly="">

                <button class="btn btn-success" data-toggle="modal" data-target="#EditarRedes"><i class="fa fa-penci"></i> Editar</button>

              </div>

              <br>

               <div class="input-group">
                
                <span class="input-group-addon"><i class="fa fa-twitter" style="font-size: 20px"></i></span>

                <input type="text" class="form-control input-lg" readonly="">

                <button class="btn btn-success" data-toggle="modal" data-target="#EditarRedes"><i class="fa fa-penci"></i> Editar</button>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>

</div>



<div id="EditarGenerales" class="modal fade" role="dialog">
    
  <div class="modal-dialog">
    
    <div class="modal-content">
      
      <form role="form" method="post" enctype="multipart/form-data">
        
        <div class="modal-body">
          
          <div class="box-body">
            
            <div class="form-group">
              
              <h2>Favicon:</h2>

              <input type="file" name="faviconE">

              <img src="views/img/default.png" class="img-responsive" width="50px">

              <input type="hidden" name="faviconActual">

            </div>

            <div class="form-group">
              
              <h2>Titular:</h2>

              <input type="text" class="form-control input-lg" name="titularE">

              <input type="hidden" name="Gid">

            </div>

            <div class="form-group">
              
              <h2>Imagen Principal:</h2>

              <input type="file" name="imagenE">

              <img src="views/img/default.png" class="img-responsive">

              <input type="hidden" name="imagenActual">

            </div>

          </div>

        </div>

        <div class="modal-footer">
          
          <button type="submit" class="btn btn-success">Guardar</button>

          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

        </div>

      </form>

    </div>

  </div>

</div>



<div id="EditarContactos" class="modal fade" role="dialog">
    
  <div class="modal-dialog">
    
    <div class="modal-content">
      
      <form role="form" method="post">
        
        <div class="modal-body">
          
          <div class="box-body">
            
            <div class="form-group">
              
              <h2>Ubicación:</h2>

              <input type="text" class="form-control input-lg" name="ubicacionE">

              <input type="hidden" name="Cid">

            </div>

            <div class="form-group">
              
              <h2>Teléfono:</h2> 

              <input type="text" class="form-control input-lg" name="telefonoE">

            </div>

            <div class="form-group">
              
              <h2>Correo:</h2> 

              <input type="text" class="form-control input-lg" name="correoE">

            </div>

          </div>

        </div>

        <div class="modal-footer">
          
          <button type="submit" class="btn btn-success">Guardar</button>

          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

        </div>

      </form>

    </div>

  </div>

</div>




<div id="EditarRedes" class="modal fade" role="dialog">
    
  <div class="modal-dialog">
    
    <div class="modal-content">
      
      <form role="form" method="post">
        
        <div class="modal-body">
          
          <div class="box-body">
            
            <div class="form-group">
              
              <h2>Ícono:</h2>

              <input type="text" class="form-control input-lg" id="iconoE" name="iconoE">

              <input type="hidden" id="Rid" name="Rid">

            </div>

            <div class="form-group">
              
              <h2>Url:</h2>

              <input type="text" class="form-control input-lg" id="urlE" name="urlE">

            </div>

          </div>

        </div>

        <div class="modal-footer">
          
          <button type="submit" class="btn btn-success">Guardar</button>

          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

        </div>

      </form>

    </div>

  </div>

</div>