<?php

include "_autoload.php";

$vta_orden_venta_id = Gral::getVars(Gral::VARS_POST, "vta_orden_venta_id", 0);
$cmb_vta_orden_venta_tipo_estado_id = Gral::getVars(Gral::VARS_POST, "cmb_vta_orden_venta_tipo_estado_id", 0);
$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", '');

// se realizan los controles de datos
$arr["error"] = false;

if (Ctrl::esVacio($txa_observacion)) {
    $arr["txa_observacion"] = Lang::_lang("Debe indicar una observacion.", true);
    $arr["error"] = true;
}

if ($cmb_vta_orden_venta_tipo_estado_id == 0) {
    $arr["cmb_vta_orden_venta_tipo_estado_id"] = Lang::_lang("Debe indicar un estado.", true);
    $arr["error"] = true;
}

if ($vta_orden_venta_id == 0) {
    $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error con la Orden de venta.", true);
    $arr["error"] = true;
}


if (!$arr["error"]) {
    $vta_orden_venta = VtaOrdenVenta::getOxId($vta_orden_venta_id);
    $vta_orden_venta_tipo_estado = VtaOrdenVentaTipoEstado::getOxId($cmb_vta_orden_venta_tipo_estado_id);

    if ($vta_orden_venta) {

        $vta_orden_venta_estado = $vta_orden_venta->setVtaOrdenVentaEstado($vta_orden_venta_tipo_estado->getCodigo(), $txa_observacion);
        
    } else {
        $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error durante el proceso.", true);
        $arr["error"] = true;
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>