<?php
$cantidad_items = $vta_nota_debito->getVtaNotaDebitoCantidadItems();
$vta_tipo_origen_nota_debito = $vta_nota_debito->getVtaTipoOrigenNotaDebito();

$cli_cliente = $vta_nota_debito->getCliCliente();

$vta_nota_debito_vta_nota_creditos = $vta_nota_debito->getVtaNotaDebitoVtaNotaCreditos(null, null, true);
$vta_nota_debito_vta_recibos = $vta_nota_debito->getVtaNotaDebitoVtaRecibos(null, null, true);

// se obtienen observaciones de afip
$ws_fe_ope_solicitud_respuesta_observacions = $vta_nota_debito->getWsFeOpeSolicitudRespuestaObservacions();
?>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vermasinfo" identificador="<?php echo $vta_nota_debito->getId() ?>" modulo="vta_nota_debito_gestion">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="actividad" title="<?php Gral::_echo($vta_nota_debito->getGralActividad()->getDescripcion()) ?> - <?php Gral::_echo($vta_nota_debito->getGralEscenario()->getDescripcion()) ?>">
        <?php Gral::_echo($vta_nota_debito->getGralActividad()->getCodigoMin()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="codigo">
        <?php Gral::_echo($vta_nota_debito->getCodigo()) ?>
    </div>
    <div class="fecha_emision" title="<?php Gral::_echo(Gral::getFechaHoraToWeb($vta_nota_debito->getCreado())) ?>">
        <?php Gral::_echo(Gral::getFechaToWeb($vta_nota_debito->getFechaEmision())) ?>
    </div>
    <div class="tipo-origen <?php Gral::_echo($vta_tipo_origen_nota_debito->getCodigo()) ?>">
        <?php Gral::_echo($vta_tipo_origen_nota_debito->getDescripcion()) ?>
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

        <?php Gral::_echo($vta_nota_debito->getPersonaDescripcion()) ?>
    </div>
    <div class="documento">
        <?php Gral::_echo($vta_nota_debito->getGralTipoDocumento()->getDescripcion()) ?>: 
        <?php Gral::_echo($vta_nota_debito->getPersonaDocumento()) ?>
    </div>
    <div class="email">
        <?php Gral::_echo($vta_nota_debito->getPersonaEmail()) ?>
    </div>

    <div class="emails_enviados">
        <?php foreach ($vta_nota_debito->getVtaNotaDebitoEnviados() as $vta_nota_debito_enviado) { ?>
            <?php if ($vta_nota_debito_enviado->getEstado()) { ?>
                <img src="imgs/email/icn_email_green.png" alt="icn-email" width="14" title="Enviado a '<?php echo $vta_nota_debito_enviado->getDestinatario() ?>' el <?php echo Gral::getFechaHoraToWEB($vta_nota_debito_enviado->getCreado()) ?>">
            <?php } else { ?>
                <img src="imgs/email/icn_email_red.png" alt="icn-email" width="14" title="No Enviado: '<?php echo $vta_nota_debito_enviado->getCodigoEnvio() ?>'">
            <?php } ?>
        <?php } ?>
    </div>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vta_nota_debito_tipo_estado">
        <img src="imgs/vta_nota_debito_tipo_estado/<?php Gral::_echo($vta_nota_debito->getVtaNotaDebitoTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
        <?php Gral::_echo($vta_nota_debito->getVtaNotaDebitoTipoEstado()->getDescripcion()) ?>
    </div>

    <div class="vta-comprobantes-vinculados">
        <?php foreach ($vta_nota_debito_vta_nota_creditos as $vta_nota_debito_vta_nota_credito) { ?>
            <div class="vta-comprobante-vinculado">-
                <?php Gral::_echo($vta_nota_debito_vta_nota_credito->getVtaNotaCredito()->getTipoComprobanteSiglas()) ?>
                <?php Gral::_echo($vta_nota_debito_vta_nota_credito->getVtaNotaCredito()->getNumeroNotaCreditoCompleto()) ?>
                (<?php Gral::_echoImp($vta_nota_debito_vta_nota_credito->getImporteAfectado()) ?>)
            </div>
        <?php } ?>
        <?php foreach ($vta_nota_debito_vta_recibos as $vta_nota_debito_vta_recibo) { ?>
            <div class="vta-comprobante-vinculado">-
                <?php Gral::_echo($vta_nota_debito_vta_recibo->getVtaRecibo()->getCodigo()) ?>
                (<?php Gral::_echoImp($vta_nota_debito_vta_recibo->getImporteAfectado()) ?>)
            </div>
        <?php } ?>
    </div>

</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vta_tipo_nota_debito">	
        <?php Gral::_echo($vta_nota_debito->getVtaTipoNotaDebito()->getCodigoMin()) ?>
    </div>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="subtotal">
        <?php Gral::_echoImp($vta_nota_debito->getVtaNotaDebitoSubtotal()) ?>
    </div>

    <?php if ($vta_nota_debito->getVtaNotaDebitoIva() > 0) { ?>
        <div class="iva">
            + IVA: <?php Gral::_echoImp($vta_nota_debito->getVtaNotaDebitoIva()) ?>
        </div>
    <?php } ?>

    <?php if ($vta_nota_debito->getVtaNotaDebitoTributo() > 0) { ?>
        <div class="tributos">
            + Trib: <?php Gral::_echoImp($vta_nota_debito->getVtaNotaDebitoTributo()) ?>
        </div>
    <?php } ?>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="total">
        <?php Gral::_echoImp($vta_nota_debito->getVtaNotaDebitoTotal()) ?>
    </div>
    <div class="condicion-venta">
        <?php Gral::_echo($vta_nota_debito->getCondicionVentaDescripcion()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="items">
        <?php Gral::_echo($cantidad_items) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="numero_timbrado" title="Numero de Timbrado">
        <?php Gral::_echo($vta_nota_debito->getNumeroTimbrado()) ?>
    </div>
    <div class="numero_nota_debito"  title="Numero de Nota de Debito AFIP">
        <?php Gral::_echo($vta_nota_debito->getNumeroComprobanteCompleto()) ?>
    </div>
    <?php if ($vta_nota_debito->getCae() != '') { ?>
        <div class="cae" title="CAE">
            <?php Gral::_echo($vta_nota_debito->getCae()) ?>
        </div>
        <div class="fecha_emision_cae" title="Fecha de emision">
            <?php Gral::_echo(Gral::getFechaToWeb($vta_nota_debito->getCaeVencimiento())) ?>
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
    <ul class="adm_botones_acciones" vta_nota_debito_id="<?php echo $vta_nota_debito->getId() ?>">

        <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_GESTION_ACCION_FICHA')) { ?>
            <li class='adm_botones_accion vta_nota_debito_gestion_ver_ficha'>
                <img src='imgs/btn_ficha.png' width='16' border='0' />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_GESTION_ACCION_COMPROBANTE')) { ?>
            <?php if ($vta_nota_debito->getCae() != '') { ?>
                <li class='adm_botones_accion vta-nota-debito-comprobante'>
                    <a href="ajax/modulos/vta_nota_debito_gestion/pdf_nota_debito.php?vta_nota_debito_id=<?php echo $vta_nota_debito->getId() ?>" target="_blank">
                        <img src='imgs/btn_pdf.png' width='20' border='0' title="Ver Nota de Debito" />
                    </a>
                </li>
            <?php } ?>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_CREDITO_GESTION_ACCION_ENVIAR_POR_CORREO')) { ?>
            <?php if ($vta_nota_debito->getCae() != '') { ?>
                <li class='adm_botones_accion vta-nota-debito-enviar-por-correo'>
                    <img src='imgs/btn_email.png' width='20' border='0' title="Enviar Email" />
                </li>
            <?php } ?>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_GESTION_ACCION_GENERAR_NOTA_DEBITO_AFIP')) { ?>
            <?php if (empty($vta_nota_debito->getCae()) && !$vta_nota_debito->getVtaNotaDebitoTipoEstado()->getAnulado()) { ?>
                <li class='adm_botones_accion vta-nota-debito-gestion-generar-nota-debito-afip'>
                    <img src='imgs/btn_publicar.png' width='16' border='0' title="Generar CAE en AFIP" />
                </li>
            <?php } ?>
        <?php } ?>  

        <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_GESTION_ACCION_GENERAR_NOTA_CREDITO_AFIP')) { ?>
            <?php if ($vta_nota_debito->getVtaNotaDebitoTipoEstado()->getImputable() == 1) { ?>
                <li class='adm_botones_accion vta-nota-debito-gestion-generar-nota-credito-afip'>
                    <img src='imgs/btn_publicado_0.png' width='20' border='0' title="Generar Nota de Credito AFIP" />
                </li>
            <?php } ?>
        <?php } ?>
                
        <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_GESTION_ACCION_MODIFICAR')) { ?>
            <?php if ($vta_nota_debito->getVtaNotaDebitoTipoEstado()->getCodigo() == VtaNotaDebitoTipoEstado::TIPO_PENDIENTE) { ?>
                <?php if (count($vta_orden_pago_vta_nota_debitos) == 0) { ?>
                    <li class='adm_botones_accion modificar-datos'>
                        <img src='imgs/btn_modi.gif' width='20' border='0' />
                    </li>
                <?php } ?>
            <?php } ?>
        <?php } ?>        
                
        <?php if (UsCredencial::getEsAcreditado('VTA_NOTA_DEBITO_GESTION_ACCION_CONFIG')) { ?>
            <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/vta_nota_debito_gestion/db_context_acciones.php?id=<?php Gral::_echo($vta_nota_debito->getId()) ?>' modulo_metodo_init="setInitVtaNotaDebitoGestion()">
                <img src='imgs/btn_ajustar.png' width='20' />    	
            </li>
        <?php } ?>            
                
    </ul>
</td>


