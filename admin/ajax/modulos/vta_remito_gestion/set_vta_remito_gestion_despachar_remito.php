<?php

include "_autoload.php";

$txa_nota_interna = Gral::getVars(Gral::VARS_POST, "txa_nota_interna", '');
$txt_peso = Gral::getVars(Gral::VARS_POST, "txt_peso", '');
$txt_cantidad_bultos = Gral::getVars(Gral::VARS_POST, "txt_cantidad_bultos", '');
$cmb_gral_empresa_transportadora_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_empresa_transportadora_id", 0);
$txt_guia = Gral::getVars(Gral::VARS_POST, "txt_guia", '');
$txt_costo_envio = Gral::getVars(Gral::VARS_POST, "txt_costo_envio", '');
$vta_remito_id = Gral::getVars(Gral::VARS_POST, "vta_remito_id", 0);

$txt_costo_envio = Gral::getImporteDesdePriceFormatToDB($txt_costo_envio);

$txt_destinatario = Gral::getVars(Gral::VARS_POST, "txt_destinatario", '');
$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", ''); // Son los comentarios al cliente

// se realizan los controles de datos
$arr["error"] = false;


if (Ctrl::esVacio($txa_nota_interna)) {
    $arr["txa_nota_interna"] = Lang::_lang("Debe indicar una nota interna.", true);
    $arr["error"] = true;
}

if (Ctrl::esVacio($txt_guia)) {
    $arr["txt_guia"] = Lang::_lang("Debe indicar un numero de guia.", true);
    $arr["error"] = true;
}

if (!Ctrl::esNumero($txt_costo_envio)) {
    $arr["txt_costo_envio"] = Lang::_lang("Debe indicar el costo de envio en numeros.", true);
    $arr["error"] = true;
}
if (Ctrl::esVacio($txt_costo_envio)) {
    $arr["txt_costo_envio"] = Lang::_lang("Debe indicar el costo de envio.", true);
    $arr["error"] = true;
}

if ($cmb_gral_empresa_transportadora_id == 0) {
    $arr["cmb_gral_empresa_transportadora_id"] = Lang::_lang("Debe indicar una empresa de transporte.", true);
    $arr["error"] = true;
}

if (!Ctrl::esNumeroEntero($txt_cantidad_bultos)) {
    $arr["txt_cantidad_bultos"] = Lang::_lang("Debe indicar la cantidad de bultos en numeros enteros.", true);
    $arr["error"] = true;
}
if (Ctrl::esVacio($txt_cantidad_bultos)) {
    $arr["txt_cantidad_bultos"] = Lang::_lang("Debe indicar la cantidad de bultos.", true);
    $arr["error"] = true;
}

if (!Ctrl::esNumero($txt_peso)) {
    $arr["txt_peso"] = Lang::_lang("Debe indicar el peso en numeros.", true);
    $arr["error"] = true;
}
if (Ctrl::esVacio($txt_peso)) {
    $arr["txt_peso"] = Lang::_lang("Debe indicar el peso.", true);
    $arr["error"] = true;
}

if (!Ctrl::esVacio($txt_destinatario)) {
    if (!Ctrl::esEmail($txt_destinatario)) {
        $arr["txt_destinatario"] = Lang::_lang("Debe indicar un email valido.", true);
        $arr["error"] = true;
    }
    if (Ctrl::esVacio($txa_observacion)) {
        $arr["txa_observacion"] = Lang::_lang("Debe indicar una observacion.", true);
        $arr["error"] = true;
    }
}


if (!$arr["error"]) {
    $vta_remito = VtaRemito::getOxId($vta_remito_id);

    if ($vta_remito) {
        $vta_remito_estado = $vta_remito->setVtaRemitoEstado(VtaRemitoTipoEstado::TIPO_DESPACHADO, $txa_observacion);

        $vta_remito_estado->setNotaInterna($txa_nota_interna);
        $vta_remito_estado->setObservacion($txa_observacion);
        $vta_remito_estado->setCantidadBultos($txt_cantidad_bultos);
        $vta_remito_estado->setPeso($txt_peso);
        $vta_remito_estado->setGuia($txt_guia);
        $vta_remito_estado->setCostoEnvio($txt_costo_envio);
        $vta_remito_estado->setGralEmpresaTransportadoraId($cmb_gral_empresa_transportadora_id);

        $vta_remito_estado->save();
        $vta_remito->save();

        // ---------------------------------------------------------------------
        // se actualiza el estado de remision de la OV
        // ---------------------------------------------------------------------
        $vta_remito_vta_orden_ventas = $vta_remito->getVtaRemitoVtaOrdenVentas();
        foreach ($vta_remito_vta_orden_ventas as $vta_remito_vta_orden_venta) {
            $vta_orden_venta = $vta_remito_vta_orden_venta->getVtaOrdenVenta();

            if ($vta_orden_venta->getCantidadDisponibleEnRemito() > 0) {
                $vta_orden_venta->setVtaOrdenVentaEstadoRemision(VtaOrdenVentaTipoEstadoRemision::TIPO_DESPACHO_PARCIAL, $txa_nota_interna);
            } else {
                $vta_orden_venta->setVtaOrdenVentaEstadoRemision(VtaOrdenVentaTipoEstadoRemision::TIPO_DESPACHO_TOTAL, $txa_nota_interna);
            }
        }

        // --------------------------------------------------------------------
        // Enviar el remito por correo, solo si existe destinatario
        // --------------------------------------------------------------------
        if (!Ctrl::esVacio($txt_destinatario)) {

            $enviar = true;

            include 'pdf_remito_plantilla.php';

            $destinatarios = $txt_destinatario;

            $strFilePDF = $vta_remito->getNombreArchivoAdjuntoRemito();
            $strContenidoPdf = $pdf->Output($vta_remito->getNombreArchivoAdjuntoRemito(), 'S');
            $archivo_adjunto_urls = array($strFilePDF => $strContenidoPdf);

            $envio_ok = $vta_remito->enviarRemitoEmail($enviar, $destinatarios, $txa_observacion, $archivo_adjunto_urls);
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