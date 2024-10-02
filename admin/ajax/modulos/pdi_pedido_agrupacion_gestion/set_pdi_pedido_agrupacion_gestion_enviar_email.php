<?php

include "_autoload.php";

$pdi_pedido_agrupacion_id = Gral::getVars(Gral::VARS_GET, "pdi_pedido_agrupacion_id", 0, Gral::TIPO_INTEGER);
$txt_direccion_mail       = Gral::getVars(Gral::VARS_GET, "txt_direccion_mail", '', Gral::TIPO_STRING);
$txa_observacion          = Gral::getVars(Gral::VARS_GET, "txa_observacion", '', Gral::TIPO_STRING);

// se realizan los controles de datos
$arr["error"] = false;

if (Ctrl::esVacio($txt_direccion_mail)){
    $arr["txt_direccion_mail"] = Lang::_lang("Debe indicar una direccion de correo", true);
    $arr["error"] = true;
}

if (Ctrl::esVacio($txa_observacion)){
    $arr["txa_observacion"] = Lang::_lang("Debe indicar una observacion", true);
    $arr["error"] = true;
}

if ($pdi_pedido_agrupacion_id == 0){
    $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error durante el proceso. No se encontro APDI", true);
    $arr["error"] = true;
}

if (!$arr["error"])
{
    $pdi_pedido_agrupacion = PdiPedidoAgrupacion::getOxId($pdi_pedido_agrupacion_id);

    if ($pdi_pedido_agrupacion)
    {
        include 'pdf_pdi_pedido_gestion_plantilla.php';
        $strContenidoPdf = $pdf->Output($pdi_pedido_agrupacion->getNombreArchivoAdjuntoPedidoAgrupacion(), 'S');

        $enviar = true;
        //$enviar = false;

        $destinatarios  = $txt_direccion_mail;
        $mail_asunto    = Gral::getConfig('gral_cliente').' - Pedido #' . $pdi_pedido_agrupacion->getCodigo() . ' ' . date('d/m/Y H:i');
        $mail_contendio = Gral::getPathAbs() . "mailing/plantillas/GENERAL/index_pdi_pedido_agrupacion.php";
        $from           = Mail::MAIL_CASILLA_REMITENTE;
        $from_name      = Mail::MAIL_NOMBRE_REMITENTE;
        $strFilePDF           = $pdi_pedido_agrupacion->getNombreArchivoAdjuntoPedidoAgrupacion();
        $archivo_adjunto_urls = array($strFilePDF => $strContenidoPdf);
        $envio_ok             = $pdi_pedido_agrupacion->enviarPdiPedidoAgrupacionEmail($enviar, $destinatarios, $txa_observacion, $archivo_adjunto_urls);
        
        if (!$envio_ok){
            $arr["envio_mail"] = Lang::_lang("Ocurrio un error durante el proceso de envio", true);
            $arr["error"] = true;
        }
    }
    else
    {
        $arr["error_general"] = Lang::_lang("Ups! Ocurrio un error durante el proceso", true);
        $arr["error"] = true;
    }
}

// se retornan datos
$arr_json = json_encode($arr);
echo $arr_json;
?>