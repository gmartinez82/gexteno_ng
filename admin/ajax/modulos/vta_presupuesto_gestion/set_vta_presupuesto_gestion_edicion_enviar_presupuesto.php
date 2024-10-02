<?php

include "_autoload.php";

$vta_presupuesto_id = Gral::getVars(Gral::VARS_GET, "vta_presupuesto_id", 0);
$txt_direccion_mail = Gral::getVars(Gral::VARS_GET, "txt_direccion_mail", '');
$txa_enviar_observacion = Gral::getVars(Gral::VARS_GET, "txa_enviar_observacion", '');

// se realizan los controles de datos
$arr["error"] = false;

$txt_direccion_mail = str_replace(',', ';', $txt_direccion_mail);
$arr_txt_direccion_mail = explode(';', $txt_direccion_mail);

if (is_array($arr_txt_direccion_mail)) {
    foreach ($arr_txt_direccion_mail as $direccion_mail) {
        if (!Ctrl::esEmail($direccion_mail)) {
            $arr["txt_direccion_mail"] = Lang::_lang("Alguno de los emails ingresados tiene formato invalido", true);
            $arr["error"] = true;
        }
    }
} else {
    if (!Ctrl::esEmail($txt_direccion_mail)) {
        $arr["txt_direccion_mail"] = Lang::_lang("Debe indicar una direccion de correo", true);
        $arr["error"] = true;
    }
}

if (Ctrl::esVacio($txa_enviar_observacion)) {
    $arr["txa_enviar_observacion"] = Lang::_lang("Debe indicar una observacion", true);
    $arr["error"] = true;
}

if ($vta_presupuesto_id == 0) {
    $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error durante el proceso. No se encontro el presupuesto. ", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {
    $vta_presupuesto = VtaPresupuesto::getOxId($vta_presupuesto_id);

    if ($vta_presupuesto) {

        include 'pdf_presupuesto_plantilla.php';
        $strContenidoPdf = $pdf->Output($vta_presupuesto->getNombreArchivoAdjuntoPresupuesto(), 'S');

        $enviar = true;
        //$enviar = false;

        $destinatarios = $txt_direccion_mail;
        $mail_asunto = Gral::getConfig('gral_cliente').' - Presupuesto #' . $vta_presupuesto->getCodigo() . ' ' . date('d/m/Y H:i');
        $mail_contendio = Gral::getPathAbs() . "mailing/plantillas/GENERAL/index_vta_presupuesto.php";
        $from = Mail::MAIL_CASILLA_REMITENTE;
        $from_name = Mail::MAIL_NOMBRE_REMITENTE;

        $strFilePDF = $vta_presupuesto->getNombreArchivoAdjuntoPresupuesto();

        $archivo_adjunto_urls = array($strFilePDF => $strContenidoPdf);

        $envio_ok = $vta_presupuesto->enviarPresupuestoEmail($enviar, $destinatarios, $txa_enviar_observacion, $archivo_adjunto_urls);

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