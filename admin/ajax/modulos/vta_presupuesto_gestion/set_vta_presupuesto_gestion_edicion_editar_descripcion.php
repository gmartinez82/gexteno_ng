<?php

include "_autoload.php";

$txt_descripcion = Gral::getVars(Gral::VARS_POST, "txt_descripcion", '');
$vta_presupuesto_ins_insumo_id = Gral::getVars(Gral::VARS_POST, "vta_presupuesto_ins_insumo_id", 0);

// se realizan los controles de datos
$arr["error"] = false;

if (Ctrl::esVacio($txt_descripcion)) {
    $arr["txt_descripcion"] = Lang::_lang("Debe indicar una descripcion", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {
    $vta_presupuesto_ins_insumo = VtaPresupuestoInsInsumo::getOxId($vta_presupuesto_ins_insumo_id);
    if ($vta_presupuesto_ins_insumo) {
        $vta_presupuesto_ins_insumo->setDescripcion($txt_descripcion);
        $vta_presupuesto_ins_insumo->save();

    } else {
        $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error durante el proceso.", true);
        $arr["error"] = true;
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>