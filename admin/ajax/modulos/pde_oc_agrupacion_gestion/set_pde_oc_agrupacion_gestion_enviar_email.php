<?php

include "_autoload.php";

$pde_oc_agrupacion_id = Gral::getVars(Gral::VARS_GET, "pde_oc_agrupacion_id", 0);
$txt_direccion_mail = Gral::getVars(Gral::VARS_GET, "txt_direccion_mail", '');
$txa_observacion = Gral::getVars(Gral::VARS_GET, "txa_observacion", '');

// se realizan los controles de datos
$arr["error"] = false;

if (Ctrl::esVacio($txt_direccion_mail)) {
    $arr["txt_direccion_mail"] = Lang::_lang("Debe indicar una direccion de correo", true);
    $arr["error"] = true;
}

if (Ctrl::esVacio($txa_observacion)) {
    $arr["txa_observacion"] = Lang::_lang("Debe indicar una observacion", true);
    $arr["error"] = true;
}

if ($pde_oc_agrupacion_id == 0) {
    $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error durante el proceso. No se encontro AOC", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {
    $pde_oc_agrupacion = PdeOcAgrupacion::getOxId($pde_oc_agrupacion_id);

    if ($pde_oc_agrupacion) {

        include 'pdf_oc_gestion_plantilla.php';
        $strContenidoPdf = $pdf->Output($pde_oc_agrupacion->getNombreArchivoAdjuntoOrdenCompraAgrupacion(), 'S');

        $enviar = true;
        //$enviar = false;

        $destinatarios = $txt_direccion_mail;
        $mail_asunto = Gral::getConfig('gral_cliente').' - Orden de Compra #' . $pde_oc_agrupacion->getCodigo() . ' ' . date('d/m/Y H:i');
        $mail_contendio = Gral::getPathAbs() . "mailing/plantillas/GENERAL/index_pde_oc_agrupacion.php";
        $from = Mail::MAIL_CASILLA_REMITENTE;
        $from_name = Mail::MAIL_NOMBRE_REMITENTE;

        $strFilePDF = $pde_oc_agrupacion->getNombreArchivoAdjuntoOrdenCompraAgrupacion();

        $archivo_adjunto_urls = array($strFilePDF => $strContenidoPdf);

        $envio_ok = $pde_oc_agrupacion->enviarPdeOcAgrupacionEmail($enviar, $destinatarios, $txa_observacion, $archivo_adjunto_urls);

        if (!$envio_ok) {
            $arr["envio_mail"] = Lang::_lang("Ocurrio un error durante el proceso de envio", true);
            $arr["error"] = true;
        }
    } else {
        $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error durante el proceso", true);
        $arr["error"] = true;
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>