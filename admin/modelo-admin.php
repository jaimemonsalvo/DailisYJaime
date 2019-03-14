<?php
 include_once 'funciones/funciones.php';
 $nombre=$_POST["nombre"];
 $apellido=$_POST["apellido"];
 $email=$_POST["email"];
 $password=$_POST["password"];
 $id_registro=$_POST["id_registro"];


if ($_POST["registro"]=='nuevo'){

    $opciones=array(
    'cost'=> 12

        );

    $pass_hash=password_hash($password, PASSWORD_BCRYPT, $opciones);

   

    try {
        $stmt = $conn->prepare("INSERT INTO admins (nombre, apellido,  email, password ) VALUES(?, ?, ?, ?) ");
        $stmt->bind_param('ssss', $nombre, $apellido, $email, $pass_hash);
        $stmt->execute();

       $id_registro=$stmt->insert_id;

            if($id_registro>0) {
                $respuesta=array(
                 'respuesta' => 'Exito',
                 'id_admin'=> $id_registro
            );

            
        }  else{
            $respuesta = array(
                'respuesta' => 'error error'
                );
         
        
          }
                
        $stmt->close();
        $conn->close();

        }  catch (Exception $e) {
            $respuesta = array(
                'Error' => $e->getMessage()
                );
        

            }

            die(json_encode($respuesta)) ; 


}

if ($_POST["registro"]=='actualizar') {

    echo $conn->ping();
    try {

            if (empty($_POST["password"]) ) {
                $stmt = $conn->prepare("UPDATE `admins` SET nombre = ?, apellido = ?, email = ?, editado =  NOW() WHERE id_admin = ?");
                $stmt->bind_param("sssi", $nombre, $apellido, $email, $id_registro);

            } else {
                $opciones=array(
                    'cost' => 12
                   
                   );

                   $hash_password = password_hash($password, PASSWORD_BCRYPT, $opciones);
                   $stmt = $conn->prepare("UPDATE `admins` SET nombre = ?, apellido = ?, email = ?, password = ?, editado =  NOW() WHERE id_admin = ?");
                   $stmt->bind_param("ssssi", $nombre, $apellido, $email, $hash_password, $id_registro);
            }
            

     
        $stmt->execute();

        if ($stmt->affected_rows) {
            $respuesta= array(
                'respuesta'=> 'Exito',
                'id_actualizado'=> $stmt->insert_id

            );
        }else{
            $respuesta=array(
                'respuesta'=> 'Error'
            );

        }

        $stmt->close();
        $conn->close();

    } catch (Exception $e) {
        $respuesta = array(
            'respuesta' => $e->getMessage()

        );
        
         
      }


      die(json_encode($respuesta));
   
}


if ($_POST["registro"]=='eliminar') {
    
    $id_borrar=$_POST['id'];
    try {
        $stmt = $conn->prepare("DELETE FROM `admins` WHERE id_admin = ? ");
        $stmt->bind_param('i', $id_borrar);
        $stmt->execute();
        if ($stmt->affected_rows) {
            $respuesta= array(
                'respuesta' => 'exito',
                'id_eliminado'=>$id_borrar

            );
        }else{
            $respuesta = array(
                'respuesta' => 'error'
            );
        }
        
    } catch (Exception $e) {
        $respuesta = array(
            'respuesta' => $e->getMessage()

        );
        
         
      }


    die(json_encode($respuesta));
}
