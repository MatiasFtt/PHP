<?php
//est es un comentario 
/*esto tambien */
//Definicion de Variables y Asignacion de datps
$a=8;
$b=3;
echo"<h3>Operaciones aritmeticas</h3>";
echo"a= ".$a." y b=".$b;
echo"<br> la suma de a + b es ".($a+$b);
echo"<br> la resta de a - b es  ".($a -$b);
echo"<br> la divicion de a /b es".($a/$b);
echo"<br> la multiplicacion de a*b es ".($a*$b);
echo"<br> a exponente de b es ".($a**$b);
echo"<br> a resto de b es ".($a%$b);
?>

<?php
$x=8;
$y=3;
echo"<h3>Operadores de comparacion. Vacio es Falso , 1 es true</h3>";
echo "x= ".$x." y =".$y;
echo"<br> ¿x es igual a y ?".($x==$y);
echo"<br> ¿x es distinto a y ?".($x!=$y);
echo"<br> ¿x es menor a y ?".($x<$y);
echo"<br> ¿x es mayor a y ?".($x>$y);
echo"<br> ¿x es mayor o  igual a y ?".($x>=$y);
echo"<br> ¿x es menor o igual a y ?".($x<=$y);
?>

<?php
// || se activa con alt + 124
echo"<h3>Operadores logicos Y,O,Negativos </h3>";
echo" A es igual a B y X es mayor a Y ".($a==$b&&$x>$y);
echo" A es igual a B o X es igual a Y ".($a==$b||$x>$y);
echo"Negar( B es igual a X ) ".($b == $x);
?>