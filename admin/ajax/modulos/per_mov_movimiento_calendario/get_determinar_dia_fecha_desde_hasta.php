<?php

include "_autoload.php";
date_default_timezone_set('America/Argentina/Buenos_Aires');

$fecha_desde = Gral::getVars(1, "fecha_desde", '');
$fecha_hasta = Gral::getVars(1, "fecha_hasta", '');

$fecha_hasta = Gral::getFechaToDB($fecha_hasta);

//Gral::pr($fecha_desde, "desde");
//Gral::pr($fecha_hasta, "hasta");

$datetime_fecha_desde = new DateTime($fecha_desde." 00:00:00");
$datetime_fecha_hasta = new DateTime($fecha_hasta." 00:00:00");


if ($datetime_fecha_desde <= $datetime_fecha_hasta)
{
    $arr_fechas_en_rango = Date::getArrayFechasXRango($fecha_desde, $fecha_hasta);
    foreach($arr_fechas_en_rango as $fecha)
    {
        $dia_fecha = Date::getDiaDeSemana($fecha);
        $array_dia[$dia_fecha] = $dia_fecha;
    }
}
else
{
    $dia_fecha = array();
}
//Gral::prr($array_dia);


$arr_json = json_encode($array_dia);
echo $arr_json;

?>