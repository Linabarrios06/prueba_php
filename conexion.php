<?php
$conexion = new mysqli('localhost','root','','prueba_datos');
if ($conexion->connect_errno){
    die ('Lo siento hubo un problema de la conección');
}else{
    $sql = "INSERT INTO usuario(ID,nombre,edad) VALUES (NUll,'Sebastian',17)";
    $resultado = $conexion->query($sql);
    if($conexion->affected_rows >=1){
        echo 'Filas agregadas: '. $conexion->affected_rows;
    }
}
?>
