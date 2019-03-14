<?php include_once 'includes/template/header.php'; ?>


<div id="registrate" class="contenido-productos registrate clearfix " >

        
                <!--usuario  antiguo-->

    <form  id="formulario2" class="registrado" method="POST">

         <div id="datos_usuario" class="registro">

              <div class="usuario-registrado"> 
              <h2>Ya estas registrado?</h2>
                  <div class="campo email">
                    <label for="emailRegistrado">Email:</label>
                    <input type="email" id="emailRegistrado" name="emailRegistrado" placeholder="Tu Email">
                  </div>
                    <div class="campo password">
                        <label for="passwordRegistrado">Password:</label>
                        <input type="password" id="passwordRegistrado" name="passwordRegistrado" placeholder="Tu password">
                    </div>

                    <div class="campo enviar-registrado">
                        <input type="submit" class="boton-cuenta" id= "tipos" value="Ingresar" >
                      </div>
                    
                  
               </div>

               </form><!--formulario de registro-->


          <form  id="formulario1" class="registro_nuevo" method="POST">

               <!--nuevo usuario-->
            <div class="registro-nuevo">
            <h2>Registro de usuarios</h2>
                 <div class="campo nombre">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Tu Nombre">
                  </div>
          
                  <div class="campo apellido">
                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" placeholder="Tu Apellido">
                  </div>
          
                  <div class="campo email">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Tu Email">
                  </div>
                  <div class="campo password">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" placeholder="Tu password">
                      </div>
                        
                      <div class="campo enviar-nuevo">
                        <input type="submit" class="boton-cuenta" id="tipo" value="Crear" >
                      </div>

                     
             </div>


        </div><!--datos usuario .registro-->

        </form><!--formulario de registro-->








      </div><!--registrate-->    
      <?php include_once 'includes/template/footer.php'; ?>
