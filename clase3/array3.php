
<?php
$producto = array(
    array("heladera", 2500, 15), array("microonda", 1200, 3,"LUQUE"),
    array("cocina", 4500, 5),array("horno", 3000, 12),
);

for($x=0; $x< count($producto); $x++){
print("<br>".$producto[$x][0]. ",precio: ".$producto[$x][1]);
}
echo "<br>";
for ($x = 0; $x < count($producto); $x++) {
    echo "Producto $x: ";
    for ($y = 0; $y < count($producto[0]); $y++) {
        echo $producto[$x][$y] . " ";
    }
    echo "<br>";
}

echo "<br>";
foreach ($producto as $p) {
    foreach ($p as $item) {
        echo $item . " | ";
    }
    echo "<br>";
}
?>
