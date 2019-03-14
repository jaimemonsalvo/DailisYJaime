<?php

if ($_POST["login-admin"]) {

    $email=$_POST['email'];
    $password=$_POST['password'];
 
 
    try {
     include_once 'funciones/funciones.php';
         $stmt = $conn->prepare("SELECT * FROM admins WHERE email = ?");
         $stmt->bind_param('s', $email);
         $stmt->execute();
         $stmt->bind_result($id_admin, $nombre_admin, $apellido_admin, $email_admin, $password_admin, $editado, $nivel);
         if($stmt->affected_rows) {
           $existe= $stmt->fetch();
                 if ($existe) {
                     
                     if (password_verify($password, $password_admin)) {
                         session_start();
                         $_SESSION['email']=$email_admin;
                         $_SESSION['nombre']=$nombre_admin;
                         $_SESSION['apellido']=$apellido_admin;
                         $_SESSION['nivel']=$nivel;
                         $_SESSION['id_admin']=$id_admin;
                         $respuesta = array(
                             'respuesta' => 'exitoso',
                             'usuario'=> $nombre_admin
                             );
                     } else {
                         $respuesta = array(
                             'respuesta' => 'password_incorrecto'
                             );
                     }
                     
                 } else {
                     $respuesta = array(
                         'respuesta' => 'no existe'
                         );
                 }
             }
             $stmt->close();
             $conn->close();
 }  catch (Exception $e) {
    
       echo 'Error:' . $e->getMessage();
        
     }
     die(json_encode($respuesta)) ; 
 }
 