<?php

include "_autoload.php";

$vta_presupuesto_id = Gral::getVars(Gral::VARS_GET, 'vta_presupuesto_id', 0, Gral::TIPO_INTEGER);
$vta_presupuesto_tipo_despacho_id = Gral::getVars(Gral::VARS_GET, 'vta_presupuesto_tipo_despacho_id', 0, Gral::TIPO_INTEGER);

$vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);
$vta_presupuesto_tipo_despacho = VtaPresupuestoTipoDespacho::getOxId($vta_presupuesto_tipo_despacho_id);

// se realizan los controles de datos
$arr["error"] = false;

if (!$arr["error"]) {
    
    // ----------------------------------------------------------------------
    // se registra el tipo de despacho
    // ----------------------------------------------------------------------    
    $vta_presupuesto->setVtaPresupuestoTipoDespachoId($vta_presupuesto_tipo_despacho->getId());
    $vta_presupuesto->save();
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;