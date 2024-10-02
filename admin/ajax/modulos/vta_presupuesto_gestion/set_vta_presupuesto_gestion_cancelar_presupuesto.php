<?php

include "_autoload.php";

$vta_presupuesto_id = Gral::getVars(Gral::VARS_POST, "vta_presupuesto_id", null);
$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", '');

// se realizan los controles de datos
$arr["error"] = false;

if (Ctrl::esVacio($txa_observacion)) {
    $arr["txa_observacion"] = Lang::_lang("Debe indicar una observacion", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {
    $vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);

    if ($vta_presupuesto) {
        $vta_presupuesto->cancelarPresupuesto($txa_observacion);
    } else {
        $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error durante el proceso.", true);
        $arr["error"] = true;
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>