
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
          Listado de productos de sé bella
          <small>Aqui podras editar y borrar los productos</small>
        </h1>
      
    </section>

     <!-- Main content -->
     <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Maneja los productos en esta sesión</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="registros" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Marca</th>
                  <th>Nombre</th>
                  <th>Precio</th>
                  <th>Descripción</th>
                  <th>Imagen</th>
                  <th>Cantidad</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                
                <?php
                  try {
                  $sql = "SELECT id_producto, marca_producto, nombre_producto, precio_producto, descripcion_producto, img_producto, cantidad_producto From bella";
                  $resultado =  $conn -> query($sql);
                  
                  } catch (Exception $e) {
   
                    echo 'Error:' . $e->getMessage();
                     
                  }
                  
                 while( $producto_bella = $resultado->fetch_assoc()) { ?>
                  <tr>
                    <td><?php echo $producto_bella['marca_producto']; ?></td>
                    <td><?php echo $producto_bella['nombre_producto']; ?></td>
                    <td><?php echo $producto_bella['precio_producto']; ?></td>
                    <td><?php echo $producto_bella['descripcion_producto']; ?></td>
                    <td><?php echo $producto_bella['img_producto']; ?></td>
                    <td><?php echo $producto_bella['cantidad_producto']; ?></td>
                    <td class="bella-icono">
                    <a href="editar-producto.php?id=<?php echo $producto_bella['id_producto'] ?>" class="btn bg-purple btn-flat margin ">
                    <i class="fas fa-pencil-alt"></i>               
                    </a>
                    <a href="#" data-id="<?php echo $producto_bella['id_producto']; ?>" value='bella' data-tipo='producto_bella' class="btn bg-maroon btn-flag margin borrar-registro">
                    <i class="fas fa-trash-alt"></i>
                     </a>
                    </td>
                </tr>
                   

                  <?php } ?>


                </tbody>
                <tfoot>
                <tr>
                  <th>Marca</th>
                  <th>Nombre</th>
                  <th>Precio</th>
                  <th>Descripción</th>
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


