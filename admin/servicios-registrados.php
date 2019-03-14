<?php
include 'funciones/sessiones.php';

include 'funciones/funciones.php';


$sql="SELECT fecha, COUNT(*) AS resultado FROM `usuarios` GROUP BY (fecha) ORDER BY fecha";

$resultado=$conn->query($sql);
$arreglo_registros = array();
while ($registrodia=$resultado->fetch_assoc()) {
 $fecha = $registrodia['fecha'];
 $registro['fecha']=date('Y-m-d', strtotime($fecha));
 $registro['cantidad']= $registrodia['resultado'];
    
 $arreglo_registros[]=$registro;
}
   
    echo json_encode($arreglo_registros) ;
 