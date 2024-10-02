<?php

include "_autoload.php";

$pde_nota_debito_ids = Gral::getVars(Gral::VARS_POST, "chk_pde_comprobante_PdeNotaDebito", null);
$pde_factura_ids = Gral::getVars(Gral::VARS_POST, "chk_pde_comprobante_PdeFactura", null);

$clase = Gral::getVars(Gral::VARS_POST, "clase", '');
$pde_comprobante_id = Gral::getVars(Gral::VARS_POST, "pde_comprobante_id", 0);

// se realizan los controles de datos
$arr["error"] = false;

if (Ctrl::esVacio($clase)) {
    $arr["error_general"] = Lang::_lang("Error al seleccionar una Clase.", true);
    $arr["error"] = true;
}
if ($pde_comprobante_id == 0) {
    $arr["error_general"] = Lang::_lang("Error al seleccionar un Comprobante. ", true);
    $arr["error"] = true;
}
if (is_null($pde_factura_ids) && is_null($pde_nota_debito_ids)) {
    $arr["error_general"] .= Lang::_lang("Debe seleccionar un comprobante.", true);
    $arr["error"] = true;
}


if (!$arr["error"]) {

    if ($clase == 'PdeNotaCredito') {
        $pde_nota_credito = PdeNotaCredito::getOxId($pde_comprobante_id);
        $pde_comrobante_seleccionado = $pde_nota_credito;
    }

    if ($clase == 'PdeRecibo') {
        $pde_recibo = PdeRecibo::getOxId($pde_comprobante_id);
        $pde_comrobante_seleccionado = $pde_recibo;
    }

    $pde_comrobante_seleccionado->setImputarPdeComprobante($pde_nota_debito_ids, $pde_factura_ids);
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>