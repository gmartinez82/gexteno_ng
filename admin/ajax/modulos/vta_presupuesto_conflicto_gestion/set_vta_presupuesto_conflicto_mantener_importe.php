<?php

include "_autoload.php";

$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", '');
$vta_presupuesto_conflicto_id = Gral::getVars(Gral::VARS_POST, "vta_presupuesto_conflicto_id", 0);

// se realizan los controles de datos
$arr["error"] = false;

if (Ctrl::esVacio($txa_observacion)) {
    $arr["txa_observacion"] = Lang::_lang("Debe indicar una observacion", true);
    $arr["error"] = true;
}

if ($vta_presupuesto_conflicto_id == 0) {
    $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error durante el proceso.", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {
    $vta_presupuesto_conflicto = VtaPresupuestoConflicto::getOxId($vta_presupuesto_conflicto_id);

    if ($vta_presupuesto_conflicto) {
        
        $vta_presupuesto_conflicto->setResolverConflicto($txa_observacion, false);
        
    } else {
        $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error durante el proceso.", true);
        $arr["error"] = true;
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>