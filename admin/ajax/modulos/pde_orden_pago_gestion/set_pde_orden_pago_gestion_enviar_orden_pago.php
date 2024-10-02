<?php

include "_autoload.php";

$pde_orden_pago_id = Gral::getVars(Gral::VARS_GET, "pde_orden_pago_id", 0);
$txt_direccion_mail = Gral::getVars(Gral::VARS_GET, "txt_direccion_mail", '');
$txa_enviar_observacion = Gral::getVars(Gral::VARS_GET, "txa_enviar_observacion", '');

// se realizan los controles de datos
$arr["error"] = false;

if (Ctrl::esVacio($txt_direccion_mail)) {
    $arr["txt_direccion_mail"] = Lang::_lang("Debe indicar una direccion de correo", true);
    $arr["error"] = true;
}

if (Ctrl::esVacio($txa_enviar_observacion)) {
    $arr["txa_enviar_observacion"] = Lang::_lang("Debe indicar una observacion", true);
    $arr["error"] = true;
}

if ($pde_orden_pago_id == 0) {
    $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error durante el proceso. No se encontro el orden_pago. ", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {
    $pde_orden_pago = PdeOrdenPago::getOxId($pde_orden_pago_id);

    if ($pde_orden_pago) {

        $pde_orden_pago_estado = $pde_orden_pago->getPdeOrdenPagoEstadoActual();

        include 'pdf_orden_pago_plantilla.php';
        $strContenidoPdf = $pdf->Output($pde_orden_pago->getNombreArchivoAdjuntoOrdenPago(), 'S');

        $enviar = true;
        //$enviar = false;

        $destinatarios = $txt_direccion_mail;
        $mail_asunto = Gral::getConfig('gral_cliente').' - Orden de Pago #' . $pde_orden_pago->getCodigo() . ' ' . date('d/m/Y H:i');
        $mail_contendio = Gral::getPathAbs() . "mailing/plantillas/GENERAL/index_pde_orden_pago.php";
        $from = Mail::MAIL_CASILLA_REMITENTE;
        $from_name = Mail::MAIL_NOMBRE_REMITENTE;

        $strFilePDF = $pde_orden_pago->getNombreArchivoAdjuntoOrdenPago();

        $archivo_adjunto_urls = array($strFilePDF => $strContenidoPdf);

        $envio_ok = $pde_orden_pago->enviarOrdenPagoEmail($enviar, $destinatarios, $txa_enviar_observacion, $archivo_adjunto_urls);

        if (!$envio_ok) {
            $arr["envio_mail"] = Lang::_lang("Ocurrio un error durante el proceso de envio. ", true);
            $arr["error"] = true;
        }
    } else {
        $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error durante el proceso.", true);
        $arr["error"] = true;
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>