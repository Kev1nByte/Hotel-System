<div class="content-wrapper">

    <section class="content-header">
      <h1>
        Gestor de Sobre Nosotros
      </h1>
    
    </section>

    <!-- Main content -->
    <section class="content">
      
      <div class="box box-success">
        
        <div class="box-body">

          <?php

          $verNosotros = new NosotrosControlador();
          $verNosotros -> VerNosotrosControlador();

          ?>
          
        </div>

        <div class="box-footer">
          
          <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#EditarNosotros"><i class="fa fa-pencil"></i> Editar</button>

        </div>

      </div>

    </section>
    <!-- /.content -->
</div>

<!-- Editar Nosotros -->

<div id="EditarNosotros" class="modal fade" role="dialog">
    
    <div class="modal-dialog">
      
      <div class="modal-content">
        
        <form role="form" method="post" enctype="multipart/form-data">
          
          <div class="modal-body">
            
            <div class="box-body">
              
              <div class="form-group">
                
                <h2>Título:</h2>
                <input type="text" class="form-control input-lg" name="tituloE" required="">

              </div>

               <div class="form-group">
                
                <h2>Introducción:</h2>
                <textarea class="form-control" name="introduccionE" required></textarea>

              </div>

               <div class="form-group">
                
                <h2>Descripción:</h2>
                <textarea class="form-control" name="descripcionE" required></textarea>

              </div>

              <div class="form-group">
                
                <h2>Imagen:</h2>

                <input type="file" name="ImagenE">

                <img src="views/img/default.png" class="img-thumbnail visor" width="270px">

              </div>

            </div>

          </div>

          <div class="modal-footer">
            
            <button class="btn btn-success" type="submit">Guardar</button>

            <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>

          </div>

        </form>

      </div>

    </div>

  </div>