<?php

    include 'conexion.php';
if(isset($_POST['cedula']) && isset($_POST['nombre_apellido'])){
    $cedula=$_POST['cedula'];
    $nombre=$_POST['nombre_apellido'];
    $telefono=$_POST['telefono'];
    $sentencia= "INSERT INTO cliente VALUES('$cedula', '$nombre','$telefono')"; 
    $conexion->query($sentencia);
    $conexion->close();
header("Location: index.php");
}

if(isset($_GET['delete_cedula'])){
    $ci=$_GET['delete_cedula'];
    $sentencia="DELETE FROM CLIENTE WHERE CEDULA= $ci;";
    $conexion->query($sentencia);
    $conexion-> close();
    header("Location: index.php");
exit;
}
 

?>


