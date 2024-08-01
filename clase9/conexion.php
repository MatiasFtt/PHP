<?php
include"vars.php";
$conexion = new mysqli($host,$user,$password,$database,$port);

if ($conexion->error){
    echo"Algo anda mal con la conexion ";
}
?>