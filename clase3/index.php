<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rellenar Formulario con PHP</title>
    <link rel="stylesheet" href="index.css">

</head>
<body>
    <h2>Rellenar Formulario con PHP</h2>
    <form action="procesar_formulario.php" method="POST">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" value="<?php if(isset($_POST['nombre'])) echo $_POST['nombre']; ?>"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"><br><br>

        <label for="telefono">Teléfono:</label><br>
        <input type="text" id="telefono" name="telefono" value="<?php if(isset($_POST['telefono'])) echo $_POST['telefono']; ?>"><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
<?php
    // Validar si se han enviado datos
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los datos del formulario
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];

        // Mostrar los datos en el formulario
        echo "<form>";
        echo "<label for='nombre'>Nombre:</label><br>";
        echo "<input type='text' id='nombre' name='nombre' value='$nombre'><br><br>";

        echo "<label for='email'>Email:</label><br>";
        echo "<input type='email' id='email' name='email' value='$email'><br><br>";

        echo "<label for='telefono'>Teléfono:</label><br>";
        echo "<input type='text' id='telefono' name='telefono' value='$telefono'><br><br>";

        echo "</form>";
    } else {
        echo "No se han recibido datos del formulario.";
    }
    ?>
    