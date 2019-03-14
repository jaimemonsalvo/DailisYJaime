<?php

$accion=$_POST['accion'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$password=$_POST['password'];




if ($accion === "Crear") {
    # codigo para crear los administradores
    
// hashear los password

$opciones = array(
 'cost'=> 12
);

$pass_hash = password_hash($password, PASSWORD_BCRYPT, $opciones);

  //importar la conexion

  include '../funciones/bd_conexion.php';

  try {  
    $stmt = $conn->prepare("INSERT INTO usuarios (nombre, apellido, password, email ) VALUES(?, ?, ?, ?) ");
    $stmt->bind_param('ssss', $nombre, $apellido, $pass_hash, $email );
    $stmt->execute();
/*
PARA SABER SI HAY ALGUN ERROR QUE SE ESTA PRESENTANDO
    $respuesta = array(
        'respuesta' => $stmt->error_list,
        'error'=>$stmt->error
    );
     }*/
    if ($stmt->affected_rows>0) {

        $respuesta = array(
            'respuesta' => 'correcto',
            'id_insertado' => $stmt->insert_id,
            'tipo' => $accion

        );
    }else {
        $respuesta = array(
            'respuesta' => $stmt->error_list,
            'error'=>$stmt->error
        );
    }
    $stmt->close();
    $conn->close();
  } catch (Exception $e) {
    $respuesta = array(
        'Error' => $e->getMessage()
        );
 

    }

 echo json_encode($respuesta);


}



if ($accion === "Ingresar") {
    # codigo para loguear los administradores
    
    include '../funciones/bd_conexion.php';

    

    try {  
        
        // seleccionar el administrador de la base de datos
        $stmt = $conn->prepare("SELECT  email, password, id FROM usuarios WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        // loguear al usuario
        $stmt->bind_result($email_usuario, $password_usuario, $id_usuario);
        $stmt->fetch();
        if ($email_usuario) {

            //el email existe verificar el password


            if (password_verify($password, $password_usuario)) {
                
                // iniciar la seccion
                session_start();
                $_SESSION['email']=$email_usuario;
                $_SESSION['id']= $id_usuario;
                $_SESSION['Ingresar']=true;



                    //ingreso correcto
                $respuestal= array(
                    'resultado'=>' Password Correcto',
                     'email'=>$email_usuario
      
                  );
            }else {
                # ingreso incorrecto, enviar error

                $respuestal= array(
                    'resultado'=>'Password Incorrecto',
                   
      
      
                  );
            }
            

           
            
        } else {
            $respuestal = array(
                'Error' => 'Usuario no existe'
                );
        }
        
       

        $stmt->close();
        $conn->close();
      } catch (Exception $e) {
        $respuestal = array(
            'Error' => $e->getMessage()
            );
     
    
        }
    
        echo json_encode($respuestal);
    
    }


