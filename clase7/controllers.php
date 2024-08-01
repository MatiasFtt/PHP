<?php
include("models.php");
session_start();
//si la clave cliente No existe en la variable globar session, que cree
if(!isset($_SESSION["clientes"])){
    $_SESSION["clientes"]=array();
}
if(isset($_POST['nombre'])){
    agregarCliente();
}
if(isset($_GET[('logout')])){
    if($_GET['logout']=="true"){
        session_destroy();
        header("Location: vius.php");
        exit;
    }
}
function agregarCliente(){
//vaiables globales GET o POST
global $clientes;
if (isset($_POST)){
    $cliente= new Cliente(
        $_POST['nombre'],
        $_POST['cedula'],
        $_POST['fecha_nac'],
        $_POST['telefono'],
        $_POST['direccion'],
    );
    array_push($_SESSION['clientes'],$_POST['nombre']);
    header("Location: vius.php");
        exit;
}

}
?>