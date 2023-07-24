<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <h1>
        Gestor de Sobre Nosotros
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
      
      <div class="box box-success">
        
        <div class="box-body">
          
          <h2>Título:</h2>
          <h4>Welcome To Our Hotel</h4>
          <hr>

          <h2>Introducción:</h2>
          <h4>Donec In Nisi Non Ipsum Luctus Interdi Est. Cras Ipsum Augue, Facilisis Non Estut, Bibendum Finibus.</h4>
          <hr>

          <h2>Descripción:</h2>
          <h4>Phasellus sed semper dolor, sed sodales erat. Donec at mi nunc. Suspendisse dictum lorem nec velit scelerisque, ac egestas sem tempor. Integer at facilisis enim. Vestibulum tristique consequat finibus. Donec ut elementum lorem, id dignissim neque. Curabitur commodo, odio sit amet vestibulum pretium, urna quam tincidunt elit, a tempus ex urna sit amet tortor.</h4>
          <hr>

          <h2>Imagen:</h2>
          <img src="views/img/default.png" class="img-thumbnail" width="250px;">


        </div>

        <div class="box-footer">
          
          <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#EditarNosotros"><i class="fa fa-pencil"></i> Editar</button>

        </div>

      </div>

    </section>

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
                
                <h2>Foto:</h2>

                <input type="file" name="fotoE">

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