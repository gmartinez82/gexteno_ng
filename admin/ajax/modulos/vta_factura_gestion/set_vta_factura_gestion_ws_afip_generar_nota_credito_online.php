<?php

include "_autoload.php";
//Gral::setVerErroresPHP();

$vta_factura_id = Gral::getVars(Gral::VARS_POST, "vta_factura_id", 0);

$vta_factura_vta_orden_venta_ids = Gral::getVars(Gral::VARS_POST, "chk_vta_factura_vta_orden_venta", null);
$vta_factura_vta_orden_venta_cantidads = Gral::getVars(Gral::VARS_POST, "txt_vta_factura_vta_orden_venta_cantidad", null);
$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", '');
$chk_afectar_stock = Gral::getVars(Gral::VARS_POST, "chk_afectar_stock", 0);
$cmb_pan_panol_id = Gral::getVars(Gral::VARS_POST, "cmb_pan_panol_id", 0);

// se realizan los controles de datos
$arr["error"] = false;

if (is_null($vta_factura_vta_orden_venta_ids)) {
    $arr["error_general"] = Lang::_lang("Debe seleccionar una Orden de Venta.", true);
    $arr["error"] = true;
}

if (is_null($vta_factura_vta_orden_venta_cantidads)) {
    $arr["error_general"] .= Lang::_lang(" La cantidad es incorrecta.", true);
    $arr["error"] = true;
}

foreach ($vta_factura_vta_orden_venta_cantidads as $vta_factura_vta_orden_venta_cantidad) {
    if ($vta_factura_vta_orden_venta_cantidad == 0) {
        $arr["error_general"] .= Lang::_lang(" La cantidad no puede ser 0.", true);
        $arr["error"] = true;
    }
}

if ($vta_factura_id == 0) {
    $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error durante el proceso. No se encontro la Factura. ", true);
    $arr["error"] = true;
}

if ($chk_afectar_stock != 0) {
    if ($cmb_pan_panol_id == 0) {
        $arr["cmb_pan_panol_id"] = Lang::_lang("Debe indicar un Panol donde se afectara el movimiento de stock", true);
        $arr["error"] = true;
    }
}

if (Ctrl::esVacio($txa_observacion)) {
    $arr["txa_observacion"] = Lang::_lang("Debe indicar una observacion", true);
    $arr["error"] = true;
}


if (!$arr["error"]) {
    $vta_factura = VtaFactura::getOxId($vta_factura_id);

    $vta_nota_credito = VtaNotaCredito::setInicializarVtaNotaCreditoDesdeFactura($vta_factura, $vta_factura_vta_orden_venta_ids, $vta_factura_vta_orden_venta_cantidads, $txa_observacion, $chk_afectar_stock, $cmb_pan_panol_id);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>