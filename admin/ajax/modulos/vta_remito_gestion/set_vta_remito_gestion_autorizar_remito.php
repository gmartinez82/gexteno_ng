<?php

include "_autoload.php";

$vta_remito_id = Gral::getVars(Gral::VARS_POST, "vta_remito_id", 0);
$txa_nota_interna = Gral::getVars(Gral::VARS_POST, "txa_nota_interna", '');
$cmb_pan_panol_id = Gral::getVars(Gral::VARS_POST, "cmb_pan_panol_id", 0);

// se realizan los controles de datos
$arr["error"] = false;

if (Ctrl::esVacio($txa_nota_interna)) {
    $arr["txa_nota_interna"] = Lang::_lang("Debe indicar una nota interna.", true);
    $arr["error"] = true;
}
if ($cmb_pan_panol_id == 0) {
    $arr["cmb_pan_panol_id"] = Lang::_lang("Debe seleccionar un Panol", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {
    $vta_remito = VtaRemito::getOxId($vta_remito_id);

    if ($vta_remito) {
        $vta_remito_estado = $vta_remito->setVtaRemitoEstado(VtaRemitoTipoEstado::TIPO_PREPARADO);
        $vta_remito_estado->setNotaInterna($txa_nota_interna);

        $vta_remito_estado->save();
        
        $vta_remito->setPanPanolId($cmb_pan_panol_id);
        $vta_remito->save();

        // -------------------------------------------------------------------------
        // se registra movimiento de stock
        // -------------------------------------------------------------------------
        $vta_remito->setVtaRemitoRegistrarMovimientoStock();
        // -------------------------------------------------------------------------
    } else {
        $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error durante el proceso.", true);
        $arr["error"] = true;
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>