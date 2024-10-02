<?php

include "_autoload.php";

$vta_remito_ajuste_id = Gral::getVars(Gral::VARS_GET, "vta_remito_ajuste_id", 0);
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

if ($vta_remito_ajuste_id == 0) {
    $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error durante el proceso. No se encontro el remito. ", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {
    $vta_remito_ajuste = VtaRemitoAjuste::getOxId($vta_remito_ajuste_id);

    if ($vta_remito_ajuste) {

        $enviar = true;

        include 'pdf_remito_plantilla.php';
        $strContenidoPdf = $pdf->Output($vta_remito_ajuste->getNombreArchivoAdjuntoRemitoAjuste(), 'S');

        $destinatarios = $txt_direccion_mail;
        $mail_asunto = Gral::getConfig('gral_cliente').' - RemitoAjuste #' . $vta_remito_ajuste->getCodigo() . ' ' . date('d/m/Y H:i');
        $mail_contendio = Gral::getPathAbs() . "mailing/plantillas/GENERAL/index_vta_remito_ajuste.php";
        $from = Mail::MAIL_CASILLA_REMITENTE;
        $from_name = Mail::MAIL_NOMBRE_REMITENTE;

        $strFilePDF = $vta_remito_ajuste->getNombreArchivoAdjuntoRemitoAjuste();

        $archivo_adjunto_urls = array($strFilePDF => $strContenidoPdf);

        $envio_ok = $vta_remito_ajuste->enviarRemitoAjusteEmail($enviar, $destinatarios, $txa_observacion, $archivo_adjunto_urls);

        if (!$envio_ok) {
            $arr["error_envio_email"] = Lang::_lang("Ocurrio un error durante el proceso de envio. ", true);
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