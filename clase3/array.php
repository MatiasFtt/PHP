<?php
$dia[0]="lunes";
$dia[1]="martes";
$dia[2]="miercoles";
$dia[3]="jueves";
$dia[4]="viernes";
$dia[5]="sabado";
$dia[6]="domingo";

$hoy= date("N")-1;
print("el valor de hoy:".$hoy);
print("<br> Hoy es: ".$dia[$hoy]);

print("<h4>Los dias son:  </h4>");
for($x=0;$x< count($dia);$x++){
if($x==$hoy){
      print("<button>".$dia[$x]."</button><br>");
}else{
    print($dia[$x]."<br>");
}
}
?>