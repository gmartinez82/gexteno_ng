<?php

include_once '_autoload.php';

$vta_presupuesto_ins_insumo_id = Gral::getVars(Gral::VARS_GET, 'vta_presupuesto_ins_insumo_id', 0, Gral::TIPO_INTEGER);
$gral_tipo_iva_id = Gral::getVars(Gral::VARS_GET, 'gral_tipo_iva_id', 0, Gral::TIPO_INTEGER);

// se realizan los controles de datos
$arr["error"] = false;

if (!$arr["error"]) {

    $vta_presupuesto_ins_insumo = VtaPresupuestoInsInsumo::getOxId($vta_presupuesto_ins_insumo_id);
    if ($vta_presupuesto_ins_insumo) {
        $vta_presupuesto = $vta_presupuesto_ins_insumo->getVtaPresupuesto();

        if($vta_presupuesto->getVtaPresupuestoTipoVenta()->getCodigo() == VtaPresupuestoTipoVenta::TIPO_VENTA_Z){
            // ----------------------------------------------------------------------
            // se registra el valor seleccionado
            // ----------------------------------------------------------------------
            $vta_presupuesto_ins_insumo->setGralTipoIvaId($gral_tipo_iva_id);
            $vta_presupuesto_ins_insumo->save();

            // ----------------------------------------------------------------------
            // se recalcula por potenciales afectaciones (recardos o descuentos)
            // ----------------------------------------------------------------------
            $vta_presupuesto_ins_insumo->setRecalcularImportePorAfectaciones();        

            // ----------------------------------------------------------------------
            // se recalcula totales
            // ----------------------------------------------------------------------
            $vta_presupuesto->setActualizarCantItemsYTotalesPresupuesto();            
        }
        
    } else {
        $arr["error_general"] = Lang::_lang("Ocurrio un error durante el proceso.", true);
        $arr["error"] = true;
    }
}

if ($arr["error"]) {
    $msj = 'Error en archivo set_vta_presupuesto_gestion_edicion_vta_presupuesto_ins_insumo_set_cantidad.php.' . "\n";
    foreach ($arr as $key => $value) {
        $msj .= $key . ' -> ' . $value . "\n";
    }
    //Gral::wLog($msj);
}

// se retornan datos
//$arr_json = json_encode($arr);
//echo $arr_json;