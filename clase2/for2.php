<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros PyI</title>
    <style>
        .estilo_par{
            color:red;
        }
       
    </style>
</head>
<body>
<?php
    //impimir lso numeros pares en rojo y en verde los impares 
    for($x=1;$x<=20;$x++){
       if($x % 2==0) {
        //alt+39 comilla simple
        echo"<p class='estilo_par'> $x </p>";
       }else{
        echo"<p clas='estilo_impar'> $x </p>";
       }
    }
    ?>
</body>
</html>