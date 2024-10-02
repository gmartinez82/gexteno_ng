<?php

include_once '_autoload.php';

$vta_presupuesto_ins_insumo_id = Gral::getVars(Gral::VARS_GET, 'vta_presupuesto_ins_insumo_id', 0, Gral::TIPO_INTEGER);
$bulto_id = Gral::getVars(Gral::VARS_GET, 'bulto_id', 0, Gral::TIPO_INTEGER);

// se realizan los controles de datos
$arr["error"] = false;


if ($vta_presupuesto_ins_insumo_id == 0) {
    $arr["vta_presupuesto_ins_insumo_id"] = Lang::_lang("Error! vta_presupuesto_ins_insumo_id se encuentra vacio. ", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {

    $vta_presupuesto_ins_insumo = VtaPresupuestoInsInsumo::getOxId($vta_presupuesto_ins_insumo_id);
    if ($vta_presupuesto_ins_insumo) {

        $ins_insumo_bulto = InsInsumoBulto::getOxId($bulto_id);
        if($ins_insumo_bulto){
            $vta_presupuesto_ins_insumo->setInsInsumoBultoId($ins_insumo_bulto->getId());
            $vta_presupuesto_ins_insumo->setCantidadBulto($ins_insumo_bulto->getCantidad());
            $vta_presupuesto_ins_insumo->save();
        }else{
            $vta_presupuesto_ins_insumo->setInsInsumoBultoId('null');
            $vta_presupuesto_ins_insumo->setCantidadBulto(0);
            $vta_presupuesto_ins_insumo->save();            
        }
        
        // ----------------------------------------------------------------------
        // se recalcula por potenciales afectaciones (recardos o descuentos)
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
}

if ($arr["error"]) {
    $msj = 'Error en archivo set_vta_presupuesto_gestion_edicion_vta_presupuesto_ins_insumo_set_cantidad.php. ' . "\n";
    foreach ($arr as $key => $value) {
        $msj .= $key . ' -> ' . $value . "\n";
    }
    //Gral::wLog($msj);
}

// se retornan datos
//$arr_json = json_encode($arr);
//echo $arr_json;