<?php

include_once '_autoload.php';

$user = UsUsuario::autenticado();
$fnd_cajero = $user->getFndCajeroXFndCajeroUsUsuario();


$pde_orden_pago_id = Gral::getVars(Gral::VARS_POST, 'pde_orden_pago_id', 0);
$pde_orden_pago = PdeOrdenPago::getOxId($pde_orden_pago_id);

if ($fnd_cajero) {
    $cmb_fnd_caja_id = Gral::getVars(Gral::VARS_POST, "cmb_fnd_caja_id", 0); // si es cajero, se controla que se elija caja  
} else {
    $cmb_fnd_caja_id = Gral::getVars(Gral::VARS_POST, "cmb_fnd_caja_id", null); // si no es cajero, no utiliza caja
}

$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion");

// control de datos
$arr["error"] = false;

if ($cmb_fnd_caja_id == 0) {
    //$arr["cmb_fnd_caja_id"] = Lang::_lang("Debe seleccionar una caja", true);
    //$arr["error"] = true;
}else{
    /*
    $importe_afectado_total_efectivo = 0;
    $importe_total_caja_efectivo     = 0;
    $pde_orden_pago_gral_forma_pagos = $pde_orden_pago->getPdeOrdenPagoGralFpFormaPagos();

    foreach($pde_orden_pago_gral_forma_pagos as $pde_orden_pago_gral_forma_pago)
    {
        $gral_fp_forma_pago = $pde_orden_pago_gral_forma_pago->getGralFpFormaPago();
        if($gral_fp_forma_pago)
        {
            if($gral_fp_forma_pago->getCodigo() == GralFpFormaPago::TIPO_EFECTIVO)
            {
                $importe_afectado  = Gral::getImporteDesdePriceFormatToDB($pde_orden_pago_gral_forma_pago->getImporteAfectado());
                $importe_afectado_total_efectivo += $importe_afectado;
            }
        }
    }
    
    $fnd_caja = FndCaja::getOxId($cmb_fnd_caja_id);
    if($fnd_caja)
    {
        $arr_resumen_caja = $fnd_caja->getArrResumenCaja();
        $importe_total_caja_efectivo = $arr_resumen_caja['forma_pago'][GralFpFormaPago::TIPO_EFECTIVO]['importe'];
        //$importe_total_caja_efectivo = 800;
        if($importe_total_caja_efectivo < $importe_afectado_total_efectivo)
        {
            $arr["cmb_fnd_caja_id"] = Lang::_lang("El importe en efectivo de caja $".$importe_total_caja_efectivo." es menor al importe afectado $".$importe_afectado_total_efectivo, true);
            $arr["error"] = true;
        }
    }
    */
}
if ($fnd_cajero) {
    if ($cmb_fnd_caja_id == 0) {
        $arr["cmb_fnd_caja_id"] = Lang::_lang("Debe seleccionar una caja", true);
        $arr["error"] = true;
    }
}
if (Ctrl::esVacio($txa_observacion)) {
    $arr["error"] = true;
    $arr["txa_observacion"] = Lang::_lang("Debe ingresar una observacion", true);
}

if (!$arr["error"]) {

    // --------------------------------------------------------------------
    // se registra nuevo estado
    // --------------------------------------------------------------------
    $pde_orden_pago_estado = $pde_orden_pago->setPdeOrdenPagoEstado(PdeOrdenPagoTipoEstado::TIPO_PREPARADO, $txa_observacion);
    
    // --------------------------------------------------------------------
    // se vincula la OP a la caja
    // --------------------------------------------------------------------
    $pde_orden_pago->setFndCajaId($cmb_fnd_caja_id);
    $pde_orden_pago->save();
    
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>