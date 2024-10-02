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

$cmb_prv_preventista_id = Gral::getVars(Gral::VARS_POST, 'cmb_prv_preventista_id', 0);
$txt_destinatario = Gral::getVars(Gral::VARS_POST, "txt_destinatario");
$txa_nota_publica = Gral::getVars(Gral::VARS_POST, "txa_nota_publica");
$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion");

// control de datos
$arr["error"] = false;

if ($cmb_fnd_caja_id == 0) {
    //$arr["cmb_fnd_caja_id"] = Lang::_lang("Debe seleccionar una caja", true);
    //$arr["error"] = true;
} else {
    /*
    $importe_afectado_total_efectivo = 0;
    $importe_total_caja_efectivo = 0;
    $pde_orden_pago_gral_forma_pagos = $pde_orden_pago->getPdeOrdenPagoGralFpFormaPagos();
    foreach ($pde_orden_pago_gral_forma_pagos as $pde_orden_pago_gral_forma_pago) {
        $gral_fp_forma_pago = $pde_orden_pago_gral_forma_pago->getGralFpFormaPago();
        if ($gral_fp_forma_pago) {
            if ($gral_fp_forma_pago->getCodigo() == GralFpFormaPago::TIPO_EFECTIVO) {
                $importe_afectado = Gral::getImporteDesdePriceFormatToDB($pde_orden_pago_gral_forma_pago->getImporteAfectado());
                $importe_afectado_total_efectivo += $importe_afectado;
            }
        }
    }

    $fnd_caja = FndCaja::getOxId($cmb_fnd_caja_id);
    if ($fnd_caja) {
        $arr_resumen_caja = $fnd_caja->getArrResumenCaja();
        $importe_total_caja_efectivo = $arr_resumen_caja['forma_pago'][GralFpFormaPago::TIPO_EFECTIVO]['importe'];
        //$importe_total_caja_efectivo = 800;
        if ($importe_total_caja_efectivo < $importe_afectado_total_efectivo) {
            $arr["cmb_fnd_caja_id"] = Lang::_lang("El importe en efectivo de caja $" . $importe_total_caja_efectivo . " es menor al importe afectado $" . $importe_afectado_total_efectivo, true);
            $arr["error"] = true;
        }
    }
    */
}
if ($cmb_prv_preventista_id == 0) {
    $arr["error"] = true;
    $arr["cmb_prv_preventista_id"] = Lang::_lang("Debe ingresar un preventista", true);
}
if ($fnd_cajero) {
    if ($cmb_fnd_caja_id == 0) {
        $arr["cmb_fnd_caja_id"] = Lang::_lang("Debe seleccionar una caja", true);
        $arr["error"] = true;
    }
}
if (!Ctrl::esVacio($txt_destinatario)) {
    if (!Ctrl::esEmail($txt_destinatario)) {
        $arr["txt_destinatario"] = Lang::_lang("Debe indicar un email valido.", true);
        $arr["error"] = true;
    }
    if (Ctrl::esVacio($txa_nota_publica)) {
        $arr["error"] = true;
        $arr["txa_nota_publica"] = Lang::_lang("Debe ingresar una nota publica", true);
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
    //$pde_orden_pago_estado = $pde_orden_pago->setPdeOrdenPagoEstado(PdeOrdenPagoTipoEstado::TIPO_PAGO_PREVENTISTA, $txa_observacion, $cmb_prv_preventista_id, false, false, $txa_nota_publica);
    $pde_orden_pago_estado = $pde_orden_pago->setPdeOrdenPagoPagoPreventista($txa_observacion, $cmb_prv_preventista_id, $txa_nota_publica);
    // --------------------------------------------------------------------
    // se vincula la OP a la caja
    // --------------------------------------------------------------------
    $pde_orden_pago->setFndCajaId($cmb_fnd_caja_id);
    $pde_orden_pago->save();

    // --------------------------------------------------------------------
    // Enviar el orden pago por correo, solo si existe destinatario
    // --------------------------------------------------------------------
    if (!Ctrl::esVacio($txt_destinatario)) {

        $enviar = true;

        include 'pdf_orden_pago_plantilla.php';

        $destinatarios = $txt_destinatario;

        $strFilePDF = $pde_orden_pago->getNombreArchivoAdjuntoOrdenPago();
        $strContenidoPdf = $pdf->Output($pde_orden_pago->getNombreArchivoAdjuntoOrdenPago(), 'S');
        $archivo_adjunto_urls = array($strFilePDF => $strContenidoPdf);

        $envio_ok = $pde_orden_pago->enviarOrdenPagoEmail($enviar, $destinatarios, $txa_nota_publica, $archivo_adjunto_urls);
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>