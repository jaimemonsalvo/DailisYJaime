
  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <!--<div class="pull-left image">
          <img src="img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>-->
        <div class="info">

        
          <p><?php echo $_SESSION['nombre']."".$_SESSION['apellido']." Nivel "."".$_SESSION['nivel'];?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Buscar...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu de Administración</li>
        <li class="treeview">
          <a href="#">
          <i class="fas fa-tachometer-alt"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="dashboard.php"><i class="fa fa-circle-o"></i> Dashboard </a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
          <i class="fas fa-hand-holding-usd"></i>
            <span>Productos</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="lista-bella.php"><i class="far fa-kiss-beam"></i> Ver Bella</a></li>
            <li><a href="lista-fashion.php"><i class="fas fa-tshirt"></i> Ver fashion</a></li>
            <li><a href="crear-producto.php"><i class="fas fa-plus-circle"></i> Agregar</a></li>
          </ul>
        </li>

      

<?php  if ($_SESSION['nivel']==1)  :    ?>
        <li class="treeview">
          <a href="#">
          <i class="fas fa-book"></i>
            <span>administradores</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="lista-admin.php"><i class="far fa-kiss-beam"></i> Ver Todos</a></li>
            <li><a href="crear-admin.php"><i class="fas fa-plus-circle"></i> Agregar</a></li>
          </ul>
        </li>
     <?php endif ?>

        <li class="treeview">
          <a href="#">
          <i class="fas fa-male"></i><i class="fas fa-female"></i><i class="fas fa-child"></i>
            <span>Sobre Nosotros</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fas fa-male"></i><i class="fas fa-female"></i><i class="fas fa-child"></i> nosotros</a></li>
            
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
          <i class="far fa-comment-dots"></i>
            <span>Comparte</span> 
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="far fa-kiss-beam"></i> FORO</a></li>
            
          </ul>
        </li>
       </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->
