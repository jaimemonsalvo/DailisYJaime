<?php
 include_once 'funciones/funciones.php';

$productos=$_POST['Productos'];
$cantidadb=$_POST["cantidadb"];
$imagenb=$_POST['imagenb'];
$cantidad=$_POST['cantidad'];
$nombreb=$_POST["nombreb"];
$descripcion=$_POST['descripcion'];
$preciob=$_POST["preciob"];
$imagen=$_POST['imagen'];
$marca=$_POST['marca'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$id_registro=$_POST['id_registro'];

if ($_POST["registro"]=='nuevo'){

    if ($_POST["Productos"]=="bella"){ 
   

        try {
            $stmt = $conn->prepare("INSERT INTO `bella` (marca_producto, nombre_producto,  precio_producto, descripcion_producto, img_producto, cantidad_producto ) VALUES(?, ?, ?, ?, ?, ?) ");
            $stmt->bind_param('ssissi', $marca, $nombreb, $preciob, $descripcion, $imagenb, $cantidadb);
            $stmt->execute();

                $id_insertado=$stmt->insert_id;

        if( $id_insertado>0) {
                $respuesta=array(
                 'respuesta' => 'Exito',
                 'id_admin'=>  $id_insertado
            );    
        }  else{
            $respuesta = array(
                'respuesta' => 'error error',
                'error'=>$stmt->error,
                'error'=>$stmt->error_list
                );
         
        
          }
                
        $stmt->close();
        $conn->close();

        }  catch (Exception $e) {
            $respuesta = array(
                'Error' => $e->getMessage()
                );
        

            }

             


        }elseif ($_POST["Productos"]=="fashion") {

            try {
                $stmt = $conn->prepare("INSERT INTO `fashion` (nombre,  precio, imagen, cantidad) VALUES( ?, ?, ?, ?) ");
                $stmt->bind_param('ssss', $nombre, $precio, $imagen, $cantidad);
                $stmt->execute();
        
               $id_insertado=$stmt->insert_id;
        
                 if( $id_insertado>0) {
                    $respuesta=array(
                         'respuesta' => 'Exito',
                         'id_admin'=>  $id_insertado
                    );
        
                    
                }  else{
                    $respuesta = array(
                        'respuesta' => 'error'
                        );
                 
                
                  }
                        
                $stmt->close();
                $conn->close();
        
                }  catch (Exception $e) {
                    $respuesta = array(
                        'Error' => $e->getMessage()
                        );
                
        
                    }
        
        }

        die(json_encode($respuesta));


}

if ($_POST["registro"]=='actualizar') {

  if ($_POST["Productos"]=="bella"){ 
      try {
            $stmt = $conn->prepare("UPDATE `bella` SET marca_producto = ?, nombre_producto = ?,  precio_producto = ?, descripcion_producto = ?, img_producto = ?, cantidad_producto = ?, editado= NOW()  WHERE id_producto = ?");
            $stmt->bind_param("ssissii", $marca, $nombreb, $preciob, $descripcion, $imagenb, $cantidadb, $id_registro);
            $stmt->execute();
            if ($stmt->affected_rows) {
                $respuesta= array(
                    'respuesta'=> 'Exito',
                    'filas actualizadas'=>$stmt->error_list,
                    'id_actualizado'=> $id_registro
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
    }elseif($_POST["Productos"]=="fashion"){

        try {
            $stmt = $conn->prepare("UPDATE `fashion` SET nombre = ?, precio = ?, imagen = ?, cantidad = ?, editado = NOW()  WHERE id_fashion = ?");
            $stmt->bind_param("ssssi", $nombre, $precio, $imagen, $cantidad, $id_registro);
            $stmt->execute();
           if ($stmt->affected_rows) {
               $respuesta= array(
                   'respuesta'=> 'Exito',
                   'filas actualizadas'=>$stmt->error_list,
                   'id_actualizado'=> $id_registro
   
               );
           }else{
               $respuesta=array(
                   'respuesta'=> 'Error',
                   'posibles errores'=>$stmt->error_list

               );
   
           }
   
           $stmt->close();
           $conn->close();
   
       } catch (Exception $e) {
           $respuesta = array(
               'respuesta' => $e->getMessage()
   
           );
           
            
         }


    }

      die(json_encode($respuesta));
   
}



if ($_POST["registro"]=='eliminar') {

    if ($_POST['valor']=='bella') {
        $id_borrar=$_POST['id'];
    try {
        $stmt = $conn->prepare("DELETE FROM `bella` WHERE id_producto = ? ");
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
    } else if($_POST['valor']=='fashion'){
        $id_borrar=$_POST['id'];
    try {
        $stmt = $conn->prepare("DELETE FROM `fashion` WHERE id_fashion = ? ");
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
    }

   


    die(json_encode($respuesta));
}

