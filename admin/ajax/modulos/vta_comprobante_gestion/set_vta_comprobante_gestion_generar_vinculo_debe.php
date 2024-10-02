<?php

include "_autoload.php";

$vta_recibo_ids = Gral::getVars(Gral::VARS_POST, "chk_vta_comprobante_VtaRecibo", null);
$vta_nota_credito_ids = Gral::getVars(Gral::VARS_POST, "chk_vta_comprobante_VtaNotaCredito", null);
$vta_ajuste_haber_ids = Gral::getVars(Gral::VARS_POST, "chk_vta_comprobante_VtaAjusteHaber", null);

$clase = Gral::getVars(Gral::VARS_POST, "clase", '');
$vta_comprobante_id = Gral::getVars(Gral::VARS_POST, "vta_comprobante_id", 0);

// se realizan los controles de datos
$arr["error"] = false;

if (Ctrl::esVacio($clase)) {
    $arr["error_general"] = Lang::_lang("Error al seleccionar una Clase.", true);
    $arr["error"] = true;
}

if ($vta_comprobante_id == 0) {
    $arr["error_general"] = Lang::_lang("Error al seleccionar un Comprobante. ", true);
    $arr["error"] = true;
}

if (is_null($vta_recibo_ids) && is_null($vta_nota_credito_ids) && is_null($vta_ajuste_haber_ids)) {
    $arr["error_general"] .= Lang::_lang("Debe seleccionar un comprobante.", true);
    $arr["error"] = true;
}


if (!$arr["error"]) {

    if ($clase == 'VtaNotaDebito') {
        $vta_nota_debito = VtaNotaDebito::getOxId($vta_comprobante_id);
        $vta_comprobante_seleccionado = $vta_nota_debito;
    }

    if ($clase == 'VtaFactura') {
        $vta_factura = VtaFactura::getOxId($vta_comprobante_id);
        $vta_comprobante_seleccionado = $vta_factura;
    }

    if ($clase == 'VtaAjusteDebe') {
        $vta_ajuste_debe = VtaAjusteDebe::getOxId($vta_comprobante_id);
        $vta_comprobante_seleccionado = $vta_ajuste_debe;
}

    $vta_comprobante_seleccionado->setImputarVtaComprobante($recalcular_estado = true, $vta_nota_credito_ids, $vta_recibo_ids, $vta_ajuste_haber_ids);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>