<?php
include 'includes/template/header.php'; 
?>


<div id="#nosotros" class="informacion contenido-productos contenedor clearfix ocultar " >
          
    <h1>Sobre Nosotros</h1>
    <h2>lẹwa</h2>
          
<div class="galeria">
<a  href="img/historia/1-min.jpg" data-lightbox='img/historia' alt="foto nosotros1">
<img id="primero" src="img/historia/1.jpg" alt="">
</a>
<a  href="img/historia/2-min.jpg" data-lightbox='img/historia' alt="foto nosotros2">
<img id="segundo" src="img/historia/2.jpg" alt="">
</a>
<a  href="img/historia/4.jpg" data-lightbox='img/historia' alt="foto nosotros3">
<img id="centro"src="img/historia/4.jpg" alt="">
</a>
<a  href="img/historia/3-min.jpg" data-lightbox='img/historia' alt="foto nosotros3">
<img id="tercero" src="img/historia/3.jpg" alt="">
</a>
<a  href="img/historia/5.jpg" data-lightbox='img/historia' alt="foto nosotros3">
<img id="cuarto" src="img/historia/5.jpg" alt="">
</a>
</div>

<div class="redaccion">
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Quod odit eligendi consequuntur perspiciatis culpa a tempora nemo. 
Neque quam natus modi esse minima suscipit dolorem itaque doloremque maxime impedit? Obcaecati.
Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Quibusdam odio qui odit nulla facere impedit corporis, illum facilis quae.
 Cumque ratione ducimus voluptatum error repellat architecto. Odit deleniti aut exercitationem.
</p>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
 Quibusdam eveniet numquam neque corporis dolor sint dignissimos autem, cumque veritatis,
  pariatur, eum qui asperiores quos! Nihil consequuntur quidem magnam maiores aut.
Exercitationem eligendi labore modi deleniti soluta nihil repellendus iusto illo dignissimos, 
quisquam optio nobis! Reiciendis quaerat voluptatem sapiente aliquid ut saepe magni recusandae nihil, 
alias laboriosam magnam dolorum error porro!</p>
<p>
Totam natus ipsum molestias at, magni repudiandae modi eaque quia vitae cupiditate 
voluptatibus obcaecati quaerat doloremque nesciunt similique odit facilis nostrum in. 
Repellendus vero cumque ducimus assumenda sit fuga praesentium?</p>

</div>


 </div><!--nosotros--> 



 
 <?php 
           
           try {
              require_once('includes/funciones/bd_conexion.php');
              $sql = " SELECT *  FROM `bella` ";
              $resultado = $conn->query($sql);
           } catch (Exception $e) {
               $error = $e->getMessage();
           }  
          ?>

              <!--no se debe cerrar la conexion hasta que se hagan todas las consultas a la base de datos-->

    <div id="#bella"  class=" bella contenido-productos clearfix ocultar" >
          <h1>Nuestro Productos</h1>
         
       <!--AGREGANDO UN BUSCADOR PARA LOS PRODUCTOS bella-->
<div id="buscarProductos"> 
<label for="buscar">Buscar productos:</label>
<input type="text" id="buscar" class="buscador" placeholder="Buscar">
</div> 

<div  class="contenido-bella " >
          
         

         <?php while ($bella = $resultado->fetch_assoc() ) {?>

        
             <div class="icono">
                <img class="imagen" src="img/<?php echo $bella["img_producto"]?>.png" alt="producto#1">

                        <div class="font">
                <a href="compras.php"><i class=" fas fa-shopping-cart">  
                    <span class="clean-gray">Comprar</span>
                    </i>
                </a>
                     
                   <a href="#"> <i class="  fas fa-heart">
                    <span class="clean-gray">Lo Quiero</span>
                    </i>
                </a>
                    <a href="#">
                    <i class=" fas fa-balance-scale">
                    <span class="clean-gray">Compararlo</span>
                    </i>
                    </a>
                    </div>
                <p class="titulo bella"><?php echo $bella["nombre_producto"]?></p>
                <p class="precio">$ <?php echo $bella["precio_producto"]?></p>
                

            </div><!--icono-->
           
            <?php } ?>

        </div><!--contenido bella-->

 </div><!--bella-->  



        
 <?php 

//  haciendo conexion con la base de datos 
 try {
              require_once('includes/funciones/bd_conexion.php');
              $sql = " SELECT * FROM `fashion` ";
              $resultado = $conn->query($sql);
           } catch (Exception $e) {
               $error = $e->getMessage();
           }  
          ?>

                <?php $conn->close();?>


       
        
      <div id="#fashion" class=" fashion contenido-productos clearfix ocultar" >
          
          <h1>fashion</h1>
         
<!--AGREGANDO UN BUSCADOR PARA LOS PRODUCTOS fashion-->
<div id="buscarProductos"> 
<label for="buscarf">Buscar productos:</label>
<input type="text" id="buscarf" class="buscador" placeholder="Buscar">
</div>
          <div class="contenido-fashion ">

                        <?php while ($fashion = $resultado->fetch_assoc() ) {?>

                            <div class="icono">

                              <img class="imagen" src="img/Turbantes/<?php echo $fashion["imagen"]?>.jpg" alt="producto#1">
                              
                                   <i class="fas fa-shopping-cart">
                                    <span class="clean-gray">Comprar</span>
                                   </i>
                                   <i class="fas fa-heart">
                                   <span class="clean-gray">Lo Quiero</span>
                                   </i>
                                    <i class="fas fa-balance-scale">
                                    <span class="clean-gray">Compararlo</span>
                                   </i>
                                  <p class="titulo fashionista"><?php echo $fashion["nombre"]?></p>
                                  <p class="precio">$<?php echo $fashion["precio"]?></p>
                                  <p class="cantidades">Cantidad disponible: <?php echo $fashion["cantidad"]?></p>
                                </div><!--icono-->
                                  <?php } ?>
                </div ><!--contenido producto-->
      
        </div><!--fashion--> 
     
       
          
          <div id="#comparte"class="contenido-productos  clearfix ocultar" >

              <h2>comparte</h2>
<p>aqui se diseñará un sitio de opiniones, donde las personas registradas podran opinar, calificar y clasificar sus productos, cada cuenta podra ser visible a los demas foto, 
    si quiere productos que ha utilizado, nombre, etc sobre los productos,  y ademas podran hablar sobre los temas que deseen sus vivencias con el cabello afro, sus trasiciones, etc</p>

            </div><!--comparte-->  
          
  




<?php include_once 'includes/template/footer.php'; ?>
