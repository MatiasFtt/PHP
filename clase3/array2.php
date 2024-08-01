<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 2</title>
</head>
<body>
    <?php
    $edades = array("Moises" => "33", "Camila" => "25", "Samanta" => "17");
    echo "Camila tiene " . $edades['Camila'] . " años";

    foreach ($edades as $nombre => $edad) {
        echo "<p>Clave = " . $nombre . ", valor = " . $edad . "</p>";
    }
    ?>
</body>
</html>
