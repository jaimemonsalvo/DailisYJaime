
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
       Crear Producto
        <small>Llena el formulario para crear un producto</small>
      </h1>
    
    </section>
            <div class="row">
                <div class="col-md-8">
    
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Crear producto</h3>
        </div>

        <div class="box-body">
        <form role="form"  name="guardar-registro" id="guardar-registro" method="post" action="modelo-producto.php">

              <div class="radio">
                    <label>   
                      <input type="radio" class='Productosb'name="Productos" id="bellacheck" value="bella" >
                      Bella
                    </label>
                </div>
                  <div class="radio">
                    <label>
                      <input type="radio" class='Productosf' name="Productos" id="fashioncheck" value="fashion" >
                      Fashion
                    </label>
                  </div>

        

              <div class="box-body">
              <div class="form-group">
                  <label id="marca1" for="Marca">Marca:</label>
                  <input type="text" class="form-control" id="marca" placeholder="marca" name="marca">
                </div>

                <div class="form-group">
                  <label for="nombre">Nombre:</label>
                  <input type="text" class="form-control" id="nombreb"  placeholder="nombre" name="nombreb">
                  <input type="text" class="form-control" id="nombre"  placeholder="nombre" name="nombre">

                </div>
                
                <label for="precio">Precio:</label>
                  <input type="text" class="form-control" id="preciob" placeholder="precio" name="preciob">
                  <input type="text" class="form-control" id="precio" placeholder="precio" name="precio">
                </div>
               
               <div class="form-group">
                  <label for="cantidad">Cantidad:</label>
                  <input type="text" class="form-control" id="cantidadb" placeholder="Cantidad" name="cantidadb">
                  <input type="text" class="form-control" id="cantidad" placeholder="Cantidad" name="cantidad">
               </div>
               

               <div class="form-group">
               <label id="descripcion1" for="descripcion">Descripción:</label>
               <input type="text" class="form-control" id="descripcion" placeholder="Descripcion" name="descripcion">
            </div>
               <div class="form-group">
                  <label for="imagen">Imagen:</label>
                  <input type="text"  class="form-control"  id="imagenb"  placeholder="Nombre de Imagen" name="imagenb">
                  <input type="text"  class="form-control"  id="imagen" placeholder="Nombre de Imagen"  name="imagen">
                </div>
                
             </div>
              <!-- /.box-body -->

              <div class="box-footer">
                  <input type="hidden" name="registro" value='nuevo'>
                <button type="submit" class="btn btn-primary" id="crearRegistro">Añadir</button>
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


