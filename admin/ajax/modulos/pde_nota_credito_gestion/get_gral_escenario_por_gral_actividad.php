<?php

include "_autoload.php";

$gral_actividad_id = Gral::getVars(Gral::VARS_GET, 'gral_actividad_id', null);
$gral_escenarios = GralEscenario::getOsxGralActividadId($gral_actividad_id);

$arr = array();

foreach ($gral_escenarios as $gral_escenario) {
    $arr_gral_escenario = array(
        'id' => $gral_escenario->getId(),
        'descripcion' => $gral_escenario->getDescripcion(),
    );
    $arr[] = $arr_gral_escenario;
}

$arr_json = json_encode($arr);
echo $arr_json;
?>