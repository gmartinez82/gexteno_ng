<?php

include_once '_autoload.php';

$vta_presupuesto_ins_insumo_id = Gral::getVars(Gral::VARS_GET, 'vta_presupuesto_ins_insumo_id', 0);
$txt_descuento = Gral::getVars(Gral::VARS_GET, 'txt_descuento', '');

// se realizan los controles de datos
$arr["error"] = false;

if (Ctrl::esVacio($txt_descuento)) {
    $arr["txt_descuento"] = Lang::_lang("Error! txt_descuento se encuentra vacio. ", true);
    $arr["error"] = true;
}

if ($vta_presupuesto_ins_insumo_id == 0) {
    $arr["vta_presupuesto_ins_insumo_id"] = Lang::_lang("Error! vta_presupuesto_ins_insumo_id se encuentra vacio. ", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {

    $vta_presupuesto_ins_insumo = VtaPresupuestoInsInsumo::getOxId($vta_presupuesto_ins_insumo_id);

    if ($vta_presupuesto_ins_insumo) {

        $vta_presupuesto_ins_insumo->setDescuento($txt_descuento);
        $vta_presupuesto_ins_insumo->save();
        
        // ----------------------------------------------------------------------
        // se recalcula por potenciales afectaciones (recargos o descuentos)
        // ----------------------------------------------------------------------
        $vta_presupuesto_ins_insumo->setRecalcularImportePorAfectaciones();        

        // ----------------------------------------------------------------------
        // se recalcula totales
        // ----------------------------------------------------------------------
        $vta_presupuesto = $vta_presupuesto_ins_insumo->getVtaPresupuesto();
        $vta_presupuesto->setActualizarCantItemsYTotalesPresupuesto();
        
    } else {
        $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error durante el proceso.", true);
        $arr["error"] = true;
    }
} else {
    $msj = 'Error en archivo set_vta_presupuesto_gestion_edicion_vta_presupuesto_ins_insumo_set_descuento.php. '."\n";
    foreach ($arr as $key => $value) {
        $msj .= $key . ' -> ' . $value."\n";
    }
    //Gral::wLog($msj);
}

// se retornan datos
//$arr_json = json_encode($arr);
//echo $arr_json;