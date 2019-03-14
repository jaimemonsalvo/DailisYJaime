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


    <!-- Main content -->
    <section class="content">
      <div class="row">
        
        <!-- /.col -->
        
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Listado de Registrados</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Usuario</th>
                  <th>Fecha</th>
                  <th>Email</th>
                </tr>


           <?php
                    try {
                      $sql = "SELECT id, nombre, apellido , email, fecha FROM `usuarios` ";
                      $resultado= $conn->query($sql);
                    } catch (Exception $e) {
                      echo 'Error: '. $e->getMessage();
                    } 


      while ($resultado_usuarios = $resultado->fetch_assoc()) { ?>

                <tr>
                  <td><?php echo $resultado_usuarios['id'] ?></td>
                  <td><?php echo $resultado_usuarios['nombre']?> <?php echo $resultado_usuarios['apellido'] ?></td>
                  <td><?php echo $resultado_usuarios['fecha'] ?></td>
                  <td><?php echo $resultado_usuarios['email'] ?></td>
                </tr>
               
        <?php }?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  

 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
  <?php
  include 'templates/footer.php';
?>

