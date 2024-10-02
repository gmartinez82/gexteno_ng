<?php

include "_autoload.php";

$vta_comision_id = Gral::getVars(Gral::VARS_GET, "vta_comision_id", 0);
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

if ($vta_comision_id == 0) {
    $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error durante el proceso. No se encontro el comision. ", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {
    $vta_comision = VtaComision::getOxId($vta_comision_id);

    if ($vta_comision) {

        $vta_comision_estado = $vta_comision->getVtaComisionEstadoActual();

        include 'pdf_comision_plantilla.php';
        $strContenidoPdf = $pdf->Output($vta_comision->getNombreArchivoAdjuntoComision(), 'S');

        $enviar = true;
        //$enviar = false;

        $destinatarios = $txt_direccion_mail;

        $strFilePDF = $vta_comision->getNombreArchivoAdjuntoComision();

        $archivo_adjunto_urls = array($strFilePDF => $strContenidoPdf);

        $envio_ok = $vta_comision->enviarVtaComisionEmail($enviar, $destinatarios, $txa_enviar_observacion, $archivo_adjunto_urls);

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