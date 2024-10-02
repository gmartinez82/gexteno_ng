<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * @author Esteban Martinez
 * @creado 08/11/2016
 */

include "_autoload.php";

$fecha_inicio    = Gral::getVars(2, "fecha_inicio", 0);
$dias_suspension = Gral::getVars(2, "dias_suspension", 0);

$fecha_fin       = Date::sumarDias($fecha_inicio, ($dias_suspension - 1));
$fecha_reintegro = Date::sumarDias($fecha_fin, 1);

if($fecha_inicio && $dias_suspension)
{
    $arr = array(
            "fecha_fin"       => Gral::getFechaToWEB($fecha_fin),
            "fecha_reintegro" => Gral::getFechaToWEB($fecha_reintegro)
            );
}
else
{
    $arr = array("fecha_fin" => "", "fecha_reintegro" => "");
}

$arr_json = json_encode($arr);

echo $arr_json;

?>