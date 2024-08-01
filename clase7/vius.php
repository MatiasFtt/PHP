<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Cliente</title>
</head>
<body>
    <h2> Registro de Cliente</h2>
    <form metohd= "POST" action="controllers.php">
        <input type="text" name="nombre" placeholder="Nombre"> 
        <imput type="text" name="cedula" placeholder="Numero de cedula"> 
        <input type="text" name="fecha_nac" placeholder="Fecha de Nacimiento"> <br>
        <input type="text" name="telefono" placeholder="Nro de telefono"> 
        <input type="text" name="direccion" placeholder="Direccion"> 
        <button type="submit" > Registrar </button><br>

        <a href="controllers.php?logout=true">SALIR</a>
    </form>
    <h2>Lista de clientes </h2>
    <table>
    <?php
    if(isset($_SESSION["clientes"])){
        foreach($_SESSION["clientes"] as $cliente){
            echo "<tr>";
              echo "<td>".$cliente."</td>";
              echo "</tr>";
        }
    }else{
        echo"Empiece agregando un cliente";
    }
    ?>    
</body>
</html>