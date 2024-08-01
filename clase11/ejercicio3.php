<?php
header("Content-Type:application/json");
//?peso=75&estatura=183
$peso=$_GET['peso'];
$estatura=$_GET["estatura"];

if(!empty($peso)&&!empty($estatura))
{
    $estatura =$estatura/100;
    $imc=$peso/($estatura*$estatura);
    $imc=round($imc,2);

    respuesta(200,"ok",$imc);
}else{

    respuesta(400,"la respuesta no es validad", null);
}

function respuesta($estado,$mensaje_estado,$datos)
{
    header("HTTP/1.1 $estado $mensaje_estado");
    $respuesta['estado']=$estado;
    $respuesta['mensaje_estado']=$mensaje_estado;
    $respuesta['datos']=$datos ;

    $respuesta_json = json_encode($respuesta);

    echo $respuesta_json;
}
?>