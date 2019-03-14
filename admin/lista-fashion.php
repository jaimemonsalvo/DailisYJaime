
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
          Listado de Administradores
          <small></small>
        </h1>
      
    </section>

     <!-- Main content -->
     <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Maneja los usuarios en esta sesión</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="registros" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Precio</th>
                  <th>Imagen</th>
                  <th>Cantidad</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                
                <?php
                  try {
                  $sql = "SELECT id_fashion, nombre, precio, imagen, cantidad From `fashion`";
                  $resultado =  $conn -> query($sql);
                  } catch (Exception $e) {
   
                    echo 'Error:' . $e->getMessage();
                     
                  }
                  
                 while( $fashion = $resultado->fetch_assoc()) { ?>
                  <tr>
                    <td><?php echo $fashion['nombre']; ?></td>
                    <td><?php echo $fashion['precio']; ?></td>
                    <td><?php echo $fashion['imagen']; ?></td>
                    <td><?php echo $fashion['cantidad']; ?></td>
                    <td>
                    <a href="editar-producto.php?id=<?php echo $fashion['id_fashion']?>" class="btn bg-purple btn-flat margin ">
                    <i class="fas fa-pencil-alt"></i>               
                         </a>

                         <a href="#" data-id="<?php echo $fashion['id_fashion']; ?>" data-tipo='producto' value='fashion' class="btn bg-maroon btn-flag margin borrar-registro">
                         <i class="fas fa-trash-alt"></i>
                         </a>
                    
                    </td>
                </tr>
                   

                  <?php } ?>


                </tbody>
                <tfoot>
                <tr>
                <th>Nombre</th>
                  <th>Precio</th>
                  <th>Imagen</th>
                  <th>Cantidad</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <?php
  include 'templates/footer.php';
?>


