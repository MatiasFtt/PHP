
<?php
header('Content-Type: text/html; charset=utf-8');
include "conexion.php";

$consulta = "SELECT cedula, nombre_apellido, telefono FROM cliente ";
$result_set = $conexion->query($consulta);
echo "<h3>Los clientes son:</h3><br>";
if ($result_set->num_rows > 0) {
    while ($r = $result_set->fetch_assoc()) {
        $ci = $r['cedula'];
        $n = $r['nombre_apellido'];
        $t = $r['telefono'];
        echo "
            <div class='cliente'>
                <span><strong>Cédula:</strong> $ci</span><br>
                <span><strong>Nombre y Apellido:</strong> $n</span><br>
                <span><strong>Teléfono:</strong> $t</span><br>
                <form method='get' action='guardarcontroller.php' style='display: inline;'>
                    <input type='hidden' value='$ci' name='delete_cedula'>
                    <button type='submit' class='eliminar-btn'>Eliminar 🗑️</button>
                </form>
            </div>
            <hr>
        ";
    }
} else {
    echo "<p>No hay clientes registrados.</p>";
}
?>

<h2>Comenzar a cargar valores de los clientes</h2>
<form method="POST" action="guardarcontroller.php" class="cliente-form">
    <input type="text" name="cedula" placeholder="Número de Cedula">
    <input type="text" name="nombre_apellido" placeholder="Nombre y apellido">
    <input type="text" name="telefono" placeholder="Teléfono celular">
    <button type="submit" class="btn btn-success">Guardar</button>
</form>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        padding: 20px;
    }

    h3 {
        color: #333;
    }

    .cliente {
        background-color: #fff;
        border: 1px solid #ccc;
        padding: 15px;
        margin-bottom: 15px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .cliente span {
        display: block;
        margin-bottom: 8px;
    }

    .eliminar-btn {
        background-color: #dc3545;
        color: #fff;
        border: none;
        padding: 8px 12px;
        cursor: pointer;
        border-radius: 3px;
    }

    .eliminar-btn:hover {
        background-color: #c82333;
    }

    .cliente-form {
        margin-top: 20px;
        background-color: #fff;
        border: 1px solid #ccc;
        padding: 15px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .cliente-form input[type="text"], .cliente-form button {
        margin: 5px;
        padding: 10px;
        border-radius: 3px;
        border: 1px solid #ccc;
        width: calc(100% - 22px); /* Ajuste para que los elementos no sobresalgan */
    }

    .cliente-form button {
        background-color: #28a745;
        color: #fff;
        border: none;
        cursor: pointer;
        width: 100px; /* Ajuste del ancho del botón */
    }

    .cliente-form button:hover {
        background-color: #218838;
    }
</style>
