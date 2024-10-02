<?php

include_once '_autoload.php';

$pde_orden_pago_id = Gral::getVars(Gral::VARS_POST, 'pde_orden_pago_id', 0);
$pde_orden_pago = PdeOrdenPago::getOxId($pde_orden_pago_id);

$cmb_gral_empresa_transportadora_id = Gral::getVars(Gral::VARS_POST, 'cmb_gral_empresa_transportadora_id', 0);
$txt_guia = Gral::getVars(Gral::VARS_POST, "txt_guia");
$txt_destinatario = Gral::getVars(Gral::VARS_POST, "txt_destinatario");
$txa_nota_publica = Gral::getVars(Gral::VARS_POST, "txa_nota_publica");
$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion");

// control de datos
$arr["error"] = false;

if ($cmb_gral_empresa_transportadora_id == 0) {
    $arr["error"] = true;
    $arr["cmb_gral_empresa_transportadora_id"] = Lang::_lang("Debe ingresar una empresa transportadora", true);
}
if (Ctrl::esVacio($txt_guia)) {
    $arr["error"] = true;
    $arr["txt_guia"] = Lang::_lang("Debe ingresar un nro de guia", true);
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
    //$pde_orden_pago_estado = $pde_orden_pago->setPdeOrdenPagoEstado(PdeOrdenPagoTipoEstado::TIPO_PAGO_ENVIADO, $txa_observacion, false, $cmb_gral_empresa_transportadora_id, $txt_guia, $txa_nota_publica);
    $pde_orden_pago_estado = $pde_orden_pago->setPdeOrdenPagoPagoEnviado($txa_observacion, $cmb_gral_empresa_transportadora_id, $txt_guia, $txa_nota_publica);
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