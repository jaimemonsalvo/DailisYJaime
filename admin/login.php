
<?php

session_start();
$cerrar_sesion=$_GET['cerrar_sesion'];
if ($cerrar_sesion) {
  session_destroy();
}

include_once 'templates/header.php';

include_once 'funciones/funciones.php';



?>

<body class="hold-transition login-page">

<div class="login-box">
  <div class="login-logo">
    <a href="../index.php#nosotros"><b>LE</b>WA</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Inicia Sesión aqui</p>

    <form  name="login-admin-form" id="login-admin" method="post" action="login-admin.php">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-12 ">
          <input type="hidden" name="login-admin" value='1'>
          <button  type="submit" class="btn btn-primary btn-block btn-flat">Iniciar Sesión</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>

  <?php
  include 'templates/footer.php';
?>


