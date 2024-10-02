<?php

include "_autoload.php";

$vta_presupuesto_id = Gral::getVars(Gral::VARS_GET, 'vta_presupuesto_id', 0, Gral::TIPO_INTEGER);
$gral_fp_cuota_id = Gral::getVars(Gral::VARS_GET, 'gral_fp_cuota_id', 0, Gral::TIPO_INTEGER);

$vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);
$gral_fp_cuota = GralFpCuota::getOxId($gral_fp_cuota_id);

// se realizan los controles de datos
$arr["error"] = false;

if (!$arr["error"]) {
    
    // ----------------------------------------------------------------------
    // se registra la cuota elegida
    // ----------------------------------------------------------------------    
    $vta_presupuesto->setGralFpFormaPagoId($gral_fp_cuota->getGralFpMedioPago()->getGralFpFormaPagoId());
    $vta_presupuesto->setGralFpCuotaId($gral_fp_cuota->getId());
    $vta_presupuesto->save();

    // ----------------------------------------------------------------------
    // se recalculan recargos si es que aplican
    // ----------------------------------------------------------------------    
    if($gral_fp_cuota->getRecargo() != 0){
        $importe_subtotal = $vta_presupuesto->getImporteSubtotal();
        $importe_recargo = $importe_subtotal * ($gral_fp_cuota->getRecargo() / 100);
        
        $vta_presupuesto->setImporteRecargo($importe_recargo);
        $vta_presupuesto->setRecargo($gral_fp_cuota->getRecargo());
        $vta_presupuesto->save();
    }else{
        $vta_presupuesto->setImporteRecargo(0);
        $vta_presupuesto->setRecargo(0);
        $vta_presupuesto->save();        
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;