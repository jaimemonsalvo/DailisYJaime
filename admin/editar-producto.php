
<?php
$id=$_GET['id'];



if (!filter_var($id, FILTER_VALIDATE_INT)) :
    die("Error");

else:

include 'funciones/sessiones.php';

include 'funciones/funciones.php';

include 'templates/header.php';

include 'templates/barra.php';

include 'templates/navegacion.php';
/*
$pagina_anterior=$_SERVER['HTTP_REFERER'];
if ($pagina_anterior=='http://localhost/EMPRENDIMIENTO-DAILISYJAIME/admin/lista-fashion.php') {

  //echo '<style>#bellacheck { display:none;}</style>';
  

}elseif($pagina_anterior=='http://localhost/EMPRENDIMIENTO-DAILISYJAIME/admin/lista-bella.php'){

    //echo '<style>#fashioncheck { display:none;}</style>';


}

*/


?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Editar Producto
        <small>Llena el formulario para Editar un producto</small>
      </h1>
    
    </section>
            <div class="row">
                <div class="col-md-8">
    
    <!-- Main content -->º
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Editar producto</h3>
        </div>

        <div class="box-body">



        <?php

$sql= "SELECT * FROM `fashion` WHERE id_fashion= $id ";
$resultado= $conn->query($sql);
$evento = $resultado->fetch_assoc();



$sqlb= "SELECT * FROM `bella` WHERE id_producto= $id ";
$resultadob= $conn->query($sqlb);
$eventob = $resultadob->fetch_assoc();
/*
echo "<pre>";
var_dump($evento);
echo "</pre>";
*/

?>

                

        <form role="form"  name="guardar-registro" id="guardar-registro" method="post" action="modelo-producto.php">

              <div class="radio">
                    <label id="bellacheckb">   
                      <input type="radio" name="Productos" class="Productosb" id="bellacheck" value="bella" >
                        Bella
                    </label>
                </div>
                  <div class="radio">
                    <label id="fashioncheckf">
                      <input type="radio" name="Productos" class='Productosf' id="fashioncheck" value="fashion" >
                      Fashion
                    </label>
                  </div>

                 

           

                  <div class="box-body">
              <div class="form-group">
                  <label id="marca1" for="Marca">Marca:</label>
                  <input type="text" class="form-control" id="marca" placeholder="marca" value='<?php echo $eventob['marca_producto'];?>'name="marca">
                </div>

                <div class="form-group">
                  <label for="nombre">Nombre:</label>
                  <input type="text" class="form-control" id="nombreb" value='<?php echo $eventob['nombre_producto'];?>' placeholder="nombre" name="nombreb">
                  <input type="text" class="form-control" id="nombre" value='<?php echo $evento['nombre'];?>' placeholder="nombre" name="nombre">

                </div>
                
                <label for="precio">Precio:</label>
                  <input type="text" class="form-control" id="preciob" value='<?php echo $eventob['precio_producto'];?>' placeholder="precio" name="preciob">
                  <input type="text" class="form-control" id="precio" value='<?php echo $evento['precio'];?>'placeholder="precio" name="precio">
                </div>
               
               <div class="form-group">
                  <label for="cantidad">Cantidad:</label>
                  <input type="text" class="form-control" id="cantidadb" value='<?php echo $eventob['cantidad_producto'];?>' placeholder="Cantidad" name="cantidadb">
                  <input type="text" class="form-control" id="cantidad"value='<?php echo $evento['cantidad'];?>' placeholder="Cantidad" name="cantidad">
               </div>
               

               <div class="form-group">
               <label id="descripcion1" for="descripcion">Descripción:</label>
               <input type="text" class="form-control" id="descripcion" value='<?php echo $eventob['descripcion_producto'];?>' placeholder="Descripcion" name="descripcion">
            </div>
               <div class="form-group">
                  <label for="imagen">Imagen:</label>
                  <input type="text"  class="form-control"  id="imagenb" value='<?php echo $eventob['img_producto'];?>' placeholder="Nombre de Imagen" name="imagenb">
                  <input type="text"  class="form-control"  id="imagen"value='<?php echo $evento['imagen'];?>' placeholder="Nombre de Imagen"  name="imagen">
                </div>
                
             </div>
              <!-- /.box-body -->

                    
              <div class="box-footer">
                  <input type="hidden" name="registro" value='actualizar'>
                  <input type="hidden" name="id_registro" value="<?php echo $id;?>">
                <button type="submit" class="btn btn-primary" id="crearRegistro">Guardar</button>
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
endif;
?>


