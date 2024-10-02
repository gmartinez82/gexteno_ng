<?php

include "_autoload.php";

$vta_nota_debito_ids = Gral::getVars(Gral::VARS_POST, "chk_vta_comprobante_VtaNotaDebito", null);
$vta_factura_ids = Gral::getVars(Gral::VARS_POST, "chk_vta_comprobante_VtaFactura", null);
$vta_ajuste_debe_ids = Gral::getVars(Gral::VARS_POST, "chk_vta_comprobante_VtaAjusteDebe", null);

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

if (is_null($vta_factura_ids) && is_null($vta_nota_debito_ids) && is_null($vta_ajuste_debe_ids)) {
    $arr["error_general"] .= Lang::_lang("Debe seleccionar un comprobante.", true);
    $arr["error"] = true;
}


if (!$arr["error"]) {

    if ($clase == 'VtaNotaCredito') {
        $vta_nota_credito = VtaNotaCredito::getOxId($vta_comprobante_id);
        $vta_comprobante_seleccionado = $vta_nota_credito;
    }

    if ($clase == 'VtaRecibo') {
        $vta_recibo = VtaRecibo::getOxId($vta_comprobante_id);
        $vta_comprobante_seleccionado = $vta_recibo;
    }

    if ($clase == 'VtaAjusteHaber') {
        $vta_ajuste_haber = VtaAjusteHaber::getOxId($vta_comprobante_id);
        $vta_comprobante_seleccionado = $vta_ajuste_haber;
    }

    $vta_comprobante_seleccionado->setImputarVtaComprobante($recalcular_estado = true, $vta_nota_debito_ids, $vta_factura_ids, $vta_ajuste_debe_ids);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>