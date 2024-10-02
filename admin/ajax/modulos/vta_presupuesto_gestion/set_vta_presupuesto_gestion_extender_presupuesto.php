<?php

include "_autoload.php";

$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", '');
$txt_fecha_vencimiento = Gral::getVars(Gral::VARS_POST, "txt_fecha_vencimiento", '');
$vta_presupuesto_id = Gral::getVars(Gral::VARS_POST, "vta_presupuesto_id", 0);
$txt_fecha_vencimiento_to_db = Gral::getFechaToDB($txt_fecha_vencimiento);

// se realizan los controles de datos
$arr["error"] = false;

if (!Ctrl::esFechaValida($txt_fecha_vencimiento_to_db)) {
    $arr["txt_fecha_vencimiento"] = Lang::_lang("Debe indicar una fecha", true);
    $arr["error"] = true;
} else {
    if (Date::esRangoValido($txt_fecha_vencimiento_to_db, date('Y-m-d'))) {
        $arr["txt_fecha_vencimiento"] = Lang::_lang("Debe indicar una fecha mayor a la actual", true);
        $arr["error"] = true;
    }
}

if (Ctrl::esVacio($txa_observacion)) {
    $arr["txa_observacion"] = Lang::_lang("Debe indicar una observacion", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {
    $vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);

    if ($vta_presupuesto) {
        $vta_presupuesto->setFechaVencimiento($txt_fecha_vencimiento_to_db);
        $vta_presupuesto->setVtaPresupuestoEstado(VtaPresupuestoTipoEstado::TIPO_EXTENDIDO, $txa_observacion);
        $vta_presupuesto->save();
    } else {
        $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error durante el proceso.", true);
        $arr["error"] = true;
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>