<?php

include "_autoload.php";

$vta_remito_ajuste_id = Gral::getVars(Gral::VARS_POST, "vta_remito_ajuste_id", 0);
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
    $vta_remito_ajuste = VtaRemitoAjuste::getOxId($vta_remito_ajuste_id);

    if ($vta_remito_ajuste) {
        $vta_remito_ajuste_estado = $vta_remito_ajuste->setVtaRemitoAjusteEstado(VtaRemitoAjusteTipoEstado::TIPO_PREPARADO);
        $vta_remito_ajuste_estado->setNotaInterna($txa_nota_interna);

        $vta_remito_ajuste_estado->save();
        
        $vta_remito_ajuste->setPanPanolId($cmb_pan_panol_id);
        $vta_remito_ajuste->save();

        // -------------------------------------------------------------------------
        // se registra movimiento de stock
        // -------------------------------------------------------------------------
        $vta_remito_ajuste->setVtaRemitoAjusteRegistrarMovimientoStock();
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