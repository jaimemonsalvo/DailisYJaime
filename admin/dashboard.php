
<?php
include 'funciones/sessiones.php';

include 'funciones/funciones.php';

include 'templates/header.php';

include 'templates/barra.php';

include 'templates/navegacion.php';

?>


      
        
          <!-- /.box -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Información sobre el evento </small>
      </h1>
    
    </section>

    <!-- Main content -->
    <section class="content">


    <!-- LINE CHART -->
    <div class="row">
            <div class="box-body chart-responsive">
            <div class="chart" id="grafica-registros" style="height: 300px;"></div>
     </div>
            <!-- /.box-body -->


<h2 class="page-header">Resumen de registros</h2>
<div class= "row">

    <div class="col-lg-3 col-xs-6">

    <?php

 $sql= "SELECT COUNT(id) AS registro FROM `usuarios`";
 $resultado= $conn->query($sql);
 $registrados=$resultado->fetch_assoc();

     ?>

          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $registrados['registro'];?></h3>

              <p>Total Registrados</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="lista-registrados.php" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
          </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <?php
  include 'templates/footer.php';
?>


