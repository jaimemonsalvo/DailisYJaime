<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="css/lightbox.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link href="https://unpkg.com/ionicons@4.5.5/dist/css/ionicons.min.css" rel="stylesheet">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

<header>

 <div class="hero">
    <div class="contenido-header">
<div class="header-iconos">
            

        <nav class="redes-sociales">
           <a href="https://www.instagram.com/?hl=es-la" target='_blank'><i class="fab fa-instagram"></i></a>
          <a href="https://twitter.com/" target='_blank'><i class="fab fa-twitter"></i></a>
          <a href="https://www.facebook.com/" target='_blank'><i class="fab fa-facebook"></i></a>
          <a href="https://www.pinterest.es/" target='_blank'><i class="fab fa-pinterest"></i></a>
          <a href="https://www.youtube.com/" target='_blank'><i class="fab fa-youtube"></i></a>
        
        </nav>


        
        <nav class="registro-cuenta">
                <li><a class="boton"><i class="fas fa-sign-in-alt"></i>Bienvenido a Registro</a>
                  <ul>
                    <li><a href="micuenta.php">mi cuenta</a></li>
                    <li><a href="registro.php#registrate">Registrarse</a></li>
                    <li><a href="compras.php">Compras</a></li>
                    <li><a href="admin/login.php">Admin</a></li><!--seccion de administracion-->
                    <li><a href="#">Cerrar seccion</a></li> <!--en esta parte se agreag la funcionalidad para cerrar la seccion del usuario-->
                  </ul>
                </li>
        </nav>
  
   
         
       </div><!--header-iconos-->

          <div class="nombre-sitio">  
              <h1>lẹwa</h1>
            <div class="lema">
                    <h2>En cuaquier momento, en cualquier lugar.</h2>
                </div>
      </div>


     

   </div>
 </div>
</header>

  <div class="barra">

      
  <a href="#nav" class="movil-menu">
  <i class="fas fa-ellipsis-v"></i>
   </a>

     <nav id="nav" class="navegacion-principal clearfix">

     

    
       <?php
    /**para que se redireccione correctamente entre registro e index */
    $archivo= basename($_SERVER['PHP_SELF']); // ESTO NOS RETORNA EL NOMBRE DEL ARCHIVO ACTUAL
    $pagina=str_replace(".php", "",$archivo);//STR_REPLACE('que quieres buscar', 'por que lo quieres reemplazar',la fuente de los datos)
    
    



    if($pagina == 'registro'){
     
      echo '<a href="index.php#nosotros">Sobre Nosotros</a>';
      echo '<a href="index.php#bella">Sé Bella y cuídate</a>';
      echo '<a href="index.php#fashion">Sé Fashion </a>';
      echo '<a href="index.php#comparte">Comparte tus Experiencias</a>' ;   
      echo '<a href="registro.php#registrate" class="cerrar"><i class="fas fa-times"></i></a>' ; 
    }
    if($pagina=='index'){
      echo '<a href="#nosotros">Sobre Nosotros</a>';
      echo '<a href="#bella">Sé Bella y cuídate</a>';
      echo '<a href="#fashion">Sé Fashion </a>';
      echo '<a href="#comparte">Comparte tus Experiencias</a>' ; 
      echo '<a href="#nosotros" class="cerrar"><i class="fas fa-times"></i></a>' ; 

    }
     if($pagina=='micuenta'){
     echo '<a href="index.php#nosotros">Sobre Nosotros</a>';
      echo '<a href="index.php#bella">Sé Bella y cuídate</a>';
      echo '<a href="index.php#fashion">Sé Fashion </a>';
      echo '<a href="index.php#comparte">Comparte tus Experiencias</a>';
      echo '<a href="micuenta.php" class="cerrar"><i class="fas fa-times"></i></a>' ; 
 
    }
    
    if($pagina=='compras'){
      echo '<a href="index.php#nosotros">Sobre Nosotros</a>';
       echo '<a href="index.php#bella">Sé Bella y cuídate</a>';
       echo '<a href="index.php#fashion">Sé Fashion </a>';
       echo '<a href="index.php#comparte">Comparte tus Experiencias</a>'; 
       echo '<a href="compras.php" class="cerrar"><i class="fas fa-times"></i></a>' ; 

     }
     if($pagina=='condiciones'){
      echo '<a href="index.php#nosotros">Sobre Nosotros</a>';
       echo '<a href="index.php#bella">Sé Bella y cuídate</a>';
       echo '<a href="index.php#fashion">Sé Fashion </a>';
       echo '<a href="index.php#comparte">Comparte tus Experiencias</a>'; 
       echo '<a href="condiciones.php" class="cerrar"><i class="fas fa-times"></i></a>' ; 

     }
    
     if($pagina=='cook'){
      echo '<a href="index.php#nosotros">Sobre Nosotros</a>';
       echo '<a href="index.php#bella">Sé Bella y cuídate</a>';
       echo '<a href="index.php#fashion">Sé Fashion </a>';
       echo '<a href="index.php#comparte">Comparte tus Experiencias</a>';
       echo '<a href="cook.php" class="cerrar"><i class="fas fa-times"></i></a>' ; 
 
     }
    
     if($pagina=='descuento'){
      echo '<a href="index.php#nosotros">Sobre Nosotros</a>';
       echo '<a href="index.php#bella">Sé Bella y cuídate</a>';
       echo '<a href="index.php#fashion">Sé Fashion </a>';
       echo '<a href="index.php#comparte">Comparte tus Experiencias</a>';
       echo '<a href="descuento.php" class="cerrar"><i class="fas fa-times"></i></a>' ; 
 
     }
    
     if($pagina=='envios'){
      echo '<a href="index.php#nosotros">Sobre Nosotros</a>';
       echo '<a href="index.php#bella">Sé Bella y cuídate</a>';
       echo '<a href="index.php#fashion">Sé Fashion </a>';
       echo '<a href="index.php#comparte">Comparte tus Experiencias</a>'; 
       echo '<a href="envios.php" class="cerrar"><i class="fas fa-times"></i></a>' ; 

     }
    
     if($pagina=='legal'){
      echo '<a href="index.php#nosotros">Sobre Nosotros</a>';
       echo '<a href="index.php#bella">Sé Bella y cuídate</a>';
       echo '<a href="index.php#fashion">Sé Fashion </a>';
       echo '<a href="index.php#comparte">Comparte tus Experiencias</a>'; 
       echo '<a href="legal.php" class="cerrar"><i class="fas fa-times"></i></a>' ; 

     }
    
     if($pagina=='metodopago'){
      echo '<a href="index.php#nosotros">Sobre Nosotros</a>';
       echo '<a href="index.php#bella">Sé Bella y cuídate</a>';
       echo '<a href="index.php#fashion">Sé Fashion </a>';
       echo '<a href="index.php#comparte">Comparte tus Experiencias</a>'; 
       echo '<a href="metodopago.php" class="cerrar"><i class="fas fa-times"></i></a>' ; 

     }
     
     if($pagina=='novedades'){
      echo '<a href="index.php#nosotros">Sobre Nosotros</a>';
       echo '<a href="index.php#bella">Sé Bella y cuídate</a>';
       echo '<a href="index.php#fashion">Sé Fashion </a>';
       echo '<a href="index.php#comparte">Comparte tus Experiencias</a>'; 
       echo '<a href="novedades.php" class="cerrar"><i class="fas fa-times"></i></a>' ; 

     }
     if($pagina=='puntos'){
      echo '<a href="index.php#nosotros">Sobre Nosotros</a>';
       echo '<a href="index.php#bella">Sé Bella y cuídate</a>';
       echo '<a href="index.php#fashion">Sé Fashion </a>';
       echo '<a href="index.php#comparte">Comparte tus Experiencias</a>';
       echo '<a href="puntos.php" class="cerrar"><i class="fas fa-times"></i></a>' ; 
 
     }







    ?>


        
    </nav>


  </div><!--Barra--> 

  <div class="contenido  clearfix">

<main class="footer-fijo">
  
<div class="contenedor">
   