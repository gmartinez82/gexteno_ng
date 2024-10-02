<?php

include "_autoload.php";

// el ID se recibe por GET
$vta_remito_ajuste_id = Gral::getVars(Gral::VARS_GET, "vta_remito_ajuste_id", 0);

// el resto de los campos del formulario se reciben por POST
$txa_nota_interna = Gral::getVars(Gral::VARS_POST, "txa_nota_interna", '');
$txt_peso = Gral::getVars(Gral::VARS_POST, "txt_peso", '');
$txt_cantidad_bultos = Gral::getVars(Gral::VARS_POST, "txt_cantidad_bultos", '');
$cmb_gral_empresa_transportadora_id = Gral::getVars(Gral::VARS_POST, "cmb_gral_empresa_transportadora_id", 0);
$txt_guia = Gral::getVars(Gral::VARS_POST, "txt_guia", '');
$txt_costo_envio = Gral::getVars(Gral::VARS_POST, "txt_costo_envio", '');

$txt_costo_envio = Gral::getImporteDesdePriceFormatToDB($txt_costo_envio);

$txt_destinatario = Gral::getVars(Gral::VARS_POST, "txt_destinatario", '');
$txa_observacion = Gral::getVars(Gral::VARS_POST, "txa_observacion", ''); // Son los comentarios al cliente

// se realizan los controles de datos
$arr["error"] = false;


if ($cmb_gral_empresa_transportadora_id == 0) {
    $arr["cmb_gral_empresa_transportadora_id"] = Lang::_lang("Debe indicar una empresa de transporte.", true);
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
if (Ctrl::esVacio($txa_nota_interna)) {
    $arr["txa_nota_interna"] = Lang::_lang("Debe indicar una nota interna.", true);
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
    $vta_remito_ajuste = VtaRemitoAjuste::getOxId($vta_remito_ajuste_id);

    if ($vta_remito_ajuste) {
        
        // ---------------------------------------------------------------------
        // se obtiene el estado actual del remito ajuste
        // ---------------------------------------------------------------------
        $vta_remito_ajuste_estado_actual = $vta_remito_ajuste->getVtaRemitoAjusteEstadoActual();
        
        $vta_remito_ajuste_estado = $vta_remito_ajuste->setVtaRemitoAjusteEstado(VtaRemitoAjusteTipoEstado::TIPO_DESPACHADO, $txa_observacion);

        $vta_remito_ajuste_estado->setGralEmpresaTransportadoraId($cmb_gral_empresa_transportadora_id);
        $vta_remito_ajuste_estado->setGuia($txt_guia);
        $vta_remito_ajuste_estado->setCostoEnvio($txt_costo_envio);
        $vta_remito_ajuste_estado->setNotaInterna($txa_nota_interna);
        $vta_remito_ajuste_estado->setObservacion($txa_observacion);
        
        if($vta_remito_ajuste_estado_actual){
            $vta_remito_ajuste_estado->setCantidadBultos($vta_remito_ajuste_estado_actual->getCantidadBultos());
            $vta_remito_ajuste_estado->setPeso($vta_remito_ajuste_estado_actual->getPeso());
        }
        
        $vta_remito_ajuste_estado->save();
        
        // --------------------------------------------------------------------
        // Enviar el remito por correo, solo si existe destinatario
        // --------------------------------------------------------------------
        if (!Ctrl::esVacio($txt_destinatario)) {

            $enviar = true;

            include 'pdf_remito_plantilla.php';

            $destinatarios = $txt_destinatario;

            $strFilePDF = $vta_remito_ajuste->getNombreArchivoAdjuntoRemitoAjuste();
            $strContenidoPdf = $pdf->Output($vta_remito_ajuste->getNombreArchivoAdjuntoRemitoAjuste(), 'S');
            $archivo_adjunto_urls = array($strFilePDF => $strContenidoPdf);

            $envio_ok = $vta_remito_ajuste->enviarRemitoAjusteEmail($enviar, $destinatarios, $txa_observacion, $archivo_adjunto_urls);
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