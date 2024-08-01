<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> EDAD</title>
</head>
<body>
<?php
    $edad=10;
    #condicional sii...sino
    if($edad>=18){
        echo("Eres mayor de edad ");
    }else if($edad<18){
        echo("Eres menor de edad");
    }else{
        echo("Algo anda mal ");
    }
    ?>
</body>
</html>