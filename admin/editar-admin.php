
<?php
include 'funciones/sessiones.php';

include 'funciones/funciones.php';

include 'templates/header.php';

$id=$_GET['id'];


if(!filter_var($id, FILTER_VALIDATE_INT)){

    die('ERROR!!!');
}


include 'templates/barra.php';

include 'templates/navegacion.php';

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Editar Administrador
        <small>Puedes editar los datos del administrador aquí</small>
      </h1>
    
    </section>
            <div class="row">
                <div class="col-md-8">
    
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Editar Administrador</h3>
        </div>
        <div class="box-body">

        <?php 
        
        $sql = "SELECT * FROM `admins` WHERE `id_admin`=$id";
        $resultado= $conn->query($sql);
        $admin=$resultado->fetch_assoc();
        

        ?>

        <form role="form"  name="guardar-registro" id="guardar-registro" method="post" action="modelo-admin.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $admin['email'] ?>">
                </div>
                <div class="form-group">
                  <label for="nombre">Nombre:</label>
                  <input type="text" class="form-control" id="nombre" placeholder="nombre" name="nombre" value="<?php echo $admin['nombre'] ?>">
                </div>
                <label for="Apellido">Apellido:</label>
                  <input type="text" class="form-control" id="apellido" placeholder="apellido" name="apellido" value="<?php echo $admin['apellido'] ?>">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Password" name="password">
            </div>
              
                
             </div>
              <!-- /.box-body -->

              <div class="box-footer">
              <input type="hidden" name="registro" value='actualizar'>
              <input type="hidden" name="id_registro" value="<?php echo $id ?>">
                <button type="submit" class="btn btn-primary">Guardar</button>
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


