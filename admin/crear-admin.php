
<?php
include 'funciones/sessiones.php';

include 'funciones/funciones.php';

include 'templates/header.php';

include 'templates/barra.php';

include 'templates/navegacion.php';

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Crear Administrador
        <small>Llena el formulario para crear un administrador</small>
      </h1>
    
    </section>
            <div class="row">
                <div class="col-md-8">
    
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Crear Administrador</h3>
        </div>

        <div class="box-body">
        <form role="form"  name="guardar-registro" id="guardar-registro" method="post" action="modelo-admin.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                  <label for="nombre">Nombre:</label>
                  <input type="text" class="form-control" id="nombre" placeholder="nombre" name="nombre">
                </div>
                <label for="Apellido">Apellido:</label>
                  <input type="text" class="form-control" id="apellido" placeholder="apellido" name="apellido">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Password" name="password">
            </div>
              
            <div class="form-group">
                  <label for="password">Repetir Password</label>
                  <input type="password" class="form-control" id="repetir_password" placeholder="Password" name="repetir_password">
                  <span id="resultado_password" class="help-block"></span>
            </div>

             </div>
              <!-- /.box-body -->

              <div class="box-footer">
                  <input type="hidden" name="registro" value='nuevo'>
                <button type="submit" class="btn btn-primary" id="crearRegistroAdmin">Añadir</button>
              </div>
            </form>
        </div>
        <!-- /.box-body -->
       
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
                </div>
            </div>
                
  </div>
  <!-- /.content-wrapper -->



  <?php
  include 'templates/footer.php';
?>


