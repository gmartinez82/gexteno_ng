<?php

include "_autoload.php";

$pde_nota_debito_id = Gral::getVars(Gral::VARS_GET, "pde_nota_debito_id", 0);
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

if ($pde_nota_debito_id == 0) {
    $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error durante el proceso. No se encontro la Nota de Debito. ", true);
    $arr["error"] = true;
}

if (!$arr["error"]) {
    $pde_nota_debito = PdeNotaDebito::getOxId($pde_nota_debito_id);

    if ($pde_nota_debito) {

        include 'pdf_nota_debito_plantilla.php';
        $strContenidoPdf = $pdf->Output($pde_nota_debito->getNombreArchivoAdjuntoNotaDebito(), 'S');

        $enviar = true;
        //$enviar = false;

        $destinatarios = $txt_direccion_mail;
        $mail_asunto = Gral::getConfig('gral_cliente').' - Nota de Debito #' . $pde_nota_debito->getCodigo() . ' ' . date('d/m/Y H:i');
        $mail_contendio = Gral::getPathAbs() . "mailing/plantillas/GENERAL/index_pde_nota_debito.php";
        $from = Mail::MAIL_CASILLA_REMITENTE;
        $from_name = Mail::MAIL_NOMBRE_REMITENTE;

        $strFilePDF = $pde_nota_debito->getNombreArchivoAdjuntoNotaDebito();

        $archivo_adjunto_urls = array($strFilePDF => $strContenidoPdf);

        $envio_ok = $pde_nota_debito->enviarNotaDebitoEmail($enviar, $destinatarios, $txa_observacion, $archivo_adjunto_urls);

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