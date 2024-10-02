<?php
$cantidad_items = $vta_nota_credito->getVtaNotaCreditoCantidadItems();
$vta_tipo_origen_nota_credito = $vta_nota_credito->getVtaTipoOrigenNotaCredito();

$cli_cliente = $vta_nota_credito->getCliCliente();

$vta_factura_vta_nota_creditos = $vta_nota_credito->getVtaFacturaVtaNotaCreditos(null, null, true);
$vta_nota_debito_vta_nota_creditos = $vta_nota_credito->getVtaNotaDebitoVtaNotaCreditos(null, null, true);

// se obtienen observaciones de afip
$ws_fe_ope_solicitud_respuesta_observacions = $vta_nota_credito->getWsFeOpeSolicitudRespuestaObservacions();

// -----------------------------------------------------------------------------
// Info SIFEN del Comprobante
// -----------------------------------------------------------------------------
$eku_des = $vta_nota_credito->getEkuDesDelComprobante();
//Gral::prr($eku_des);
foreach($eku_des as $eku_de){
    $eku_de_asch01_req = $eku_de->getEkuDeAsch01Req();
    if($eku_de_asch01_req){
        $eku_de_arsch01_resp = $eku_de_asch01_req->getEkuDeArsch01Resp();
    }
    
//Gral::prr($eku_de);
//Gral::prr($eku_de_asch01_req);
//Gral::prr($eku_de_arsch01_resp);

}    
?>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vermasinfo" identificador="<?php echo $vta_nota_credito->getId() ?>" modulo="vta_nota_credito_gestion">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="actividad" title="<?php Gral::_echo($vta_nota_credito->getGralActividad()->getDescripcion()) ?> - <?php Gral::_echo($vta_nota_credito->getGralEscenario()->getDescripcion()) ?>">
        <?php Gral::_echo($vta_nota_credito->getGralActividad()->getCodigoMin()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="codigo">
        <?php Gral::_echo($vta_nota_credito->getCodigo()) ?>
    </div>
    <div class="fecha_emision" title="<?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_credito->getCreado())) ?>">
        <?php Gral::_echo(Gral::getFechaToWeb($vta_nota_credito->getFechaEmision())) ?>
    </div>
    <div class="tipo-origen <?php Gral::_echo($vta_tipo_origen_nota_credito->getCodigo()) ?>">
        <?php Gral::_echo($vta_tipo_origen_nota_credito->getDescripcion()) ?>
    </div>    
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>    
    <div class="cliente">
        <?php if ($cli_cliente->getId() != 'null') { ?>
            <?php if ($cli_cliente->getGralTipoPersoneria()->getCodigo() == GralTipoPersoneria::TIPO_PERSONA_JURIDICA) { ?>
                <img src="imgs/icon_cliente_empresa.png" alt="icn-email" width="18" title="<?php Gral::_echo($cli_cliente->getGralTipoPersoneria()->getDescripcion()) ?>" />
            <?php } elseif ($cli_cliente->getGralTipoPersoneria()->getCodigo() == GralTipoPersoneria::TIPO_PERSONA_FISICA) { ?>
                <img src="imgs/icon_cliente_particular.png" alt="icn-email" width="18" title="<?php Gral::_echo($cli_cliente->getGralTipoPersoneria()->getDescripcion()) ?>" />
            <?php } ?>
        <?php } ?>

        <?php Gral::_echo($vta_nota_credito->getPersonaDescripcion()) ?>
    </div>
    <div class="documento">
        <?php Gral::_echo($vta_nota_credito->getGralTipoDocumento()->getDescripcion()) ?>: 
        <?php Gral::_echo($vta_nota_credito->getPersonaDocumento()) ?>
    </div>
    <div class="email">
        <?php Gral::_echo($vta_nota_credito->getPersonaEmail()) ?>
    </div>

    <div class="emails_enviados">
        <?php foreach ($vta_nota_credito->getVtaNotaCreditoEnviados() as $vta_nota_credito_enviado) { ?>
            <?php if ($vta_nota_credito_enviado->getEstado()) { ?>
                <img src="imgs/email/icn_email_green.png" alt="icn-email" width="14" title="Enviado a '<?php echo $vta_nota_credito_enviado->getDestinatario() ?>' el <?php echo Gral::getFechaHoraToWEB($vta_nota_credito_enviado->getCreado()) ?>">
            <?php } else { ?>
                <img src="imgs/email/icn_email_red.png" alt="icn-email" width="14" title="No Enviado: '<?php echo $vta_nota_credito_enviado->getCodigoEnvio() ?>'">
            <?php } ?>
        <?php } ?>
    </div>

    
    
    
    
    
    <?php foreach($eku_des as $eku_de){ ?>
    <div class="bloque-eku-de" style="border: #ccc solid 1px; background-color: #ffffff; padding: 5px; margin: 5px; font-size: 11px; color: <?php Gral::_echo($eku_de->getEkuDeOpeTipoEstado()->getColor()) ?>;">
            <?php Gral::_echo($eku_de->getDescripcionCompleta()) ?>
        </div>
    <?php } ?>
    
    
    
    
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vta_nota_credito_tipo_estado">
        <img src="imgs/vta_nota_credito_tipo_estado/<?php Gral::_echo($vta_nota_credito->getVtaNotaCreditoTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
        <?php Gral::_echo($vta_nota_credito->getVtaNotaCreditoTipoEstado()->getDescripcion()) ?>
    </div>

    <div class="vta-comprobantes-vinculados">
        <?php foreach ($vta_factura_vta_nota_creditos as $vta_factura_vta_nota_credito) { ?>
            <div class="vta-comprobante-vinculado">
                <?php Gral::_echo($vta_factura_vta_nota_credito->getVtaFactura()->getTipoComprobanteSiglas()) ?>
                <?php Gral::_echo($vta_factura_vta_nota_credito->getVtaFactura()->getNumeroFacturaCompleto()) ?>
                (<?php Gral::_echoImp($vta_factura_vta_nota_credito->getImporteAfectado()) ?>)
            </div>
        <?php } ?>
        <?php foreach ($vta_nota_debito_vta_nota_creditos as $vta_nota_debito_vta_nota_credito) { ?>
            <div class="vta-comprobante-vinculado">
                <?php Gral::_echo($vta_nota_debito_vta_nota_credito->getVtaNotaDebito()->getTipoComprobanteSiglas()) ?>
                <?php Gral::_echo($vta_nota_debito_vta_nota_credito->getVtaNotaDebito()->getNumeroNotaDebitoCompleto()) ?>
                (<?php Gral::_echoImp($vta_nota_debito_vta_nota_credito->getImporteAfectado()) ?>)
            </div>
        <?php } ?>
    </div>

</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vta_tipo_nota_credito">	
        <?php Gral::_echo($vta_nota_credito->getVtaTipoNotaCredito()->getCodigoMin()) ?>
    </div>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="subtotal">
        <?php Gral::_echoImp($vta_nota_credito->getVtaNotaCreditoSubtotal()) ?>
    </div>

    <?php if ($vta_nota_credito->getVtaNotaCreditoIva() > 0) { ?>
        <div class="iva">
            + IVA: <?php Gral::_echoImp($vta_nota_credito->getVtaNotaCreditoIva()) ?>
        </div>
    <?php } ?>

    <?php if ($vta_nota_credito->getVtaNotaCreditoTributo() > 0) { ?>
        <div class="tributos">
            + Trib: <?php Gral::_echoImp($vta_nota_credito->getVtaNotaCreditoTributo()) ?>
        </div>
    <?php } ?>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="total">
        <?php Gral::_echoImp($vta_nota_credito->getVtaNotaCreditoTotal()) ?>
    </div>
    <div class="condicion-venta">
        <?php Gral::_echo($vta_nota_credito->getCondicionVentaDescripcion()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="items">
        <?php Gral::_echo($cantidad_items) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    
    <div class="numero_timbrado" title="Numero de Timbrado">
        <?php Gral::_echo($vta_nota_credito->getNumeroTimbrado()) ?>
    </div>
    <div class="numero_nota_credito" title="Numero de Nota de Credito AFIP">
        <?php Gral::_echo($vta_nota_credito->getNumeroComprobanteCompleto()) ?>
    </div>
    
    <?php if ($vta_nota_credito->getCae() != '') { ?>
        <div class="cae" title="CAE">
            <?php Gral::_echo($vta_nota_credito->getCae()) ?>
        </div>
        <div class="fecha_emision_cae" title="Fecha de emision">
            <?php Gral::_echo(Gral::getFechaToWeb($vta_nota_credito->getCaeVencimiento())) ?>
        </div>
    <?php } else { ?>
        <img src='imgs/icn_alerta.png' width='16' border='0' title="No autorizado por AFIP" />
    <?php } ?>

    <?php if (is_array($ws_fe_ope_solicitud_respuesta_observacions)) { ?>
        <div class="afip-observacions">
            <?php foreach ($ws_fe_ope_solicitud_respuesta_observacions as $ws_fe_ope_solicitud_respuesta_observacion) { ?>
                <div class="afip-observacion" title="<?php Gral::_echo($ws_fe_ope_solicitud_respuesta_observacion->getWsFeAfipMensaje()) ?>">
                    Obs AFIP <?php Gral::_echo($ws_fe_ope_solicitud_respuesta_observacion->getWsFeAfipCodigo()) ?>
                </div>
            <?php } ?>
        </div>
    <?php } ?>

</td>		

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <ul class="adm_botones_acciones" vta_nota_credito_id="<?php echo $vta_nota_credito->getId() ?>">

        <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_GESTION_ACCION_FICHA')) { ?>
            <li class='adm_botones_accion vta_nota_credito_gestion_ver_ficha'>
                <img src='imgs/btn_ficha.png' width='16' border='0' />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_GESTION_ACCION_COMPROBANTE')) { ?>
            <?php if ($vta_nota_credito->getCae() != '') { ?>
                <li class='adm_botones_accion vta-nota-credito-comprobante'>
                    <a href="ajax/modulos/vta_nota_credito_gestion/pdf_nota_credito.php?vta_nota_credito_id=<?php echo $vta_nota_credito->getId() ?>" target="_blank">
                        <img src='imgs/btn_pdf.png' width='20' border='0' title="Ver Nota de Credito" />
                    </a>
                </li>
            <?php } ?>
        <?php } ?>
                
        <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_GESTION_ACCION_COMPROBANTE')) { ?>
            <?php if ($vta_nota_credito->getCae() != '') { ?>
                <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/vta_nota_credito_gestion/db_context_acciones_comprobante.php?id=<?php Gral::_echo($vta_nota_credito->getId()) ?>' modulo_metodo_init="setInitVtaNotaCreditoGestion()">
                    <img src='imgs/btn_pdf.png' width='20' title="Ver Comprobante PDF" />    	
                </li>
            <?php } ?> 
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_GESTION_ACCION_ENVIAR_POR_CORREO')) { ?>
            <?php if ($vta_nota_credito->getCae() != '') { ?>
                <li class='adm_botones_accion vta-nota-credito-enviar-por-correo'>
                    <img src='imgs/btn_email.png' width='20' border='0' title="Enviar Email" />
                </li>
            <?php } ?>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_GESTION_ACCION_GENERAR_NOTA_CREDITO_AFIP')) { ?>
            <?php if (empty($vta_nota_credito->getCae()) && !$vta_nota_credito->getVtaNotaCreditoTipoEstado()->getAnulado()) { ?>
                <li class='adm_botones_accion vta-nota-credito-gestion-generar-nota-credito-afip'>
                    <img src='imgs/btn_publicar.png' width='16' border='0' title="Generar CAE en AFIP" />
                </li>
            <?php } ?>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_GESTION_ACCION_GENERAR_NOTA_DEBITO_AFIP')) { ?>
            <?php
            $vta_nota_credito_items = $vta_nota_credito->getVtaNotaCreditoItems(null, null, true);

            if (($vta_nota_credito->getVtaNotaCreditoTipoEstado()->getImputable() == 1) && (count($vta_nota_credito_items) > 0)) {
                ?>
                <li class='adm_botones_accion vta-nota-credito-gestion-generar-nota-debito-afip'>
                    <img src='imgs/btn_publicado_0.png' width='20' border='0' title="Generar Nota de Debito AFIP" />
                </li>
            <?php } ?>
        <?php } ?>
                
        <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_GESTION_ACCION_MODIFICAR')) { ?>
            <?php //if ($vta_nota_credito->getVtaNotaCreditoTipoEstado()->getCodigo() == VtaNotaCreditoTipoEstado::TIPO_PENDIENTE) { ?>
                <li class='adm_botones_accion modificar-datos'>
                    <img src='imgs/btn_modi.gif' width='20' border='0' />
                </li>
            <?php } ?>
        <?php //} ?>        
                
        <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_GESTION_ACCION_CONFIG')) { ?>
            <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/vta_nota_credito_gestion/db_context_acciones.php?id=<?php Gral::_echo($vta_nota_credito->getId()) ?>' modulo_metodo_init="setInitVtaNotaCreditoGestion()">
                <img src='imgs/btn_ajustar.png' width='20' />    	
            </li>
        <?php } ?>                            

    </ul>
</td>


