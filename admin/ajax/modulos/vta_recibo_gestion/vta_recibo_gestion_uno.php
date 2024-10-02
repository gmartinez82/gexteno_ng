<?php
$cantidad_items = $vta_recibo->getVtaReciboCantidadItems();
$vta_tipo_origen_recibo = $vta_recibo->getVtaTipoOrigenRecibo();

$cli_cliente = $vta_recibo->getCliCliente();
$fnd_caja = $vta_recibo->getFndCaja();

$vta_factura_vta_recibos = $vta_recibo->getVtaFacturaVtaRecibos(null, null, true);
$vta_nota_debito_vta_recibos = $vta_recibo->getVtaNotaDebitoVtaRecibos(null, null, true);
?>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vermasinfo" identificador="<?php echo $vta_recibo->getId() ?>" modulo="vta_recibo_gestion">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="codigo">
        <?php Gral::_echo($vta_recibo->getCodigo()) ?>
    </div>
    <div class="fecha_emision" title="<?php Gral::_echo(Gral::getFechaHoraToWeb($vta_recibo->getCreado())) ?>">
        <?php Gral::_echo(Gral::getFechaToWeb($vta_recibo->getFechaEmision())) ?>
    </div>
    <div class="tipo-origen <?php Gral::_echo($vta_tipo_origen_recibo->getCodigo()) ?>">
        <?php Gral::_echo($vta_tipo_origen_recibo->getDescripcion()) ?>
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

        <?php Gral::_echo($vta_recibo->getPersonaDescripcion()) ?>
    </div>
    <div class="documento">
        <?php if ($vta_recibo->getPersonaDocumento() != '') { ?>        
        <?php Gral::_echo($vta_recibo->getGralTipoDocumento()->getDescripcion()) ?>: 
        <?php Gral::_echo($vta_recibo->getPersonaDocumento()) ?>
        <?php } ?>
    </div>
    <div class="localidad">
        <?php Gral::_echo($vta_recibo->getCliCliente()->getGeoLocalidad()->getDescripcionFull()); ?>
    </div>
    <div class="email">
        <?php Gral::_echo($vta_recibo->getPersonaEmail()) ?>
    </div>
    
    <div class="emails_enviados">
        <?php foreach ($vta_recibo->getVtaReciboEnviados() as $vta_recibo_enviado) { ?>
            <?php if ($vta_recibo_enviado->getEstado()) { ?>
                <img src="imgs/email/icn_email_green.png" alt="icn-email" width="14" title="Enviado a '<?php echo $vta_recibo_enviado->getDestinatario() ?>' el <?php echo Gral::getFechaHoraToWEB($vta_recibo_enviado->getCreado()) ?>">
            <?php } else { ?>
                <img src="imgs/email/icn_email_red.png" alt="icn-email" width="14" title="No Enviado: '<?php echo $vta_recibo_enviado->getCodigoEnvio() ?>'">
            <?php } ?>
        <?php } ?>
    </div>
    
    <?php if ($fnd_caja && $fnd_caja->getId() != 'null') { ?>
        <div class="fnd-caja">
            <img src="imgs/fnd_caja_tipo_estado/<?php Gral::_echo($vta_recibo->getFndCaja()->getFndCajaTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="8" title="<?php Gral::_echo($vta_recibo->getFndCaja()->getFndCajaTipoEstado()->getDescripcion()) ?>" />
            <?php Gral::_echo($vta_recibo->getFndCaja()->getDescripcion()) ?>
        </div>    
    <?php } ?>
    
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vta_recibo_tipo_estado">
        <img src="imgs/vta_recibo_tipo_estado/<?php Gral::_echo($vta_recibo->getVtaReciboTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
        <?php Gral::_echo($vta_recibo->getVtaReciboTipoEstado()->getDescripcion()) ?>
    </div>

    <div class="vta-comprobantes-vinculados">
        <?php foreach ($vta_factura_vta_recibos as $vta_factura_vta_recibo) { ?>
            <div class="vta-comprobante-vinculado">
                <?php Gral::_echo($vta_factura_vta_recibo->getVtaFactura()->getTipoComprobanteSiglas()) ?>
                <?php Gral::_echo($vta_factura_vta_recibo->getVtaFactura()->getNumeroFacturaCompleto()) ?>
                (<?php Gral::_echoImp($vta_factura_vta_recibo->getImporteAfectado()) ?>)
            </div>
        <?php } ?>
        <?php foreach ($vta_nota_debito_vta_recibos as $vta_nota_debito_vta_recibo) { ?>
            <div class="vta-comprobante-vinculado">
                <?php Gral::_echo($vta_nota_debito_vta_recibo->getVtaNotaDebito()->getTipoComprobanteSiglas()) ?>
                <?php Gral::_echo($vta_nota_debito_vta_recibo->getVtaNotaDebito()->getNumeroNotaDebitoCompleto()) ?>
                (<?php Gral::_echoImp($vta_nota_debito_vta_recibo->getImporteAfectado()) ?>)
            </div>
        <?php } ?>
    </div>
    
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vta_tipo_recibo">	
        <?php Gral::_echo($vta_recibo->getVtaTipoRecibo()->getCodigoMin()) ?>
    </div>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="subtotal">
        <?php Gral::_echoImp($vta_recibo->getVtaReciboSubtotal()) ?>
    </div>

    <?php if($vta_recibo->getVtaReciboIva() > 0){ ?>
    <div class="iva">
        + IVA: <?php Gral::_echoImp($vta_recibo->getVtaReciboIva()) ?>
    </div>
    <?php } ?>

    <?php if($vta_recibo->getVtaReciboTributo() > 0){ ?>
    <div class="tributos">
        + Trib: <?php Gral::_echoImp($vta_recibo->getVtaReciboTributo()) ?>
    </div>
    <?php } ?>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="total">
        <?php Gral::_echoImp($vta_recibo->getVtaReciboTotal()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="items">
        <?php Gral::_echo($cantidad_items) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php //echo $estado ?> <?php //echo $publicado ?>'>
    <div class="numero_recibo"  title="Numero de Comprobante">
        <?php Gral::_echo($vta_recibo->getNumeroComprobanteCompleto()) ?>
    </div>
    <?php if ($vta_recibo->getCodigoOpCliente() != '') { ?>
        <div class="codigo-op-cliente">
            <?php Gral::_echo($vta_recibo->getCodigoOpCliente()) ?>
        </div>    
    <?php } ?>    
    <div class="vta-recibo-condicion-pago">	
        <?php Gral::_echo($vta_recibo->getVtaReciboCondicionPago()->getDescripcion()) ?>
    </div>
    <div class="vta-recibo-tipo-pago">	
        <?php Gral::_echo($vta_recibo->getVtaReciboTipoPago()->getDescripcion()) ?>
    </div>
</td>


<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <ul class="adm_botones_acciones" vta_recibo_id="<?php echo $vta_recibo->getId() ?>">

        <?php if (UsCredencial::getEsAcreditado('VTA_RECIBO_GESTION_ACCION_FICHA')) { ?>
            <li class='adm_botones_accion vta_recibo_gestion_ver_ficha'>
                <img src='imgs/btn_ficha.png' width='16' border='0' />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_RECIBO_GESTION_ACCION_COMPROBANTE')) { ?>
            <li class='adm_botones_accion vta-recibo-comprobante'>
                <a href="ajax/modulos/vta_recibo_gestion/pdf_recibo.php?vta_recibo_id=<?php echo $vta_recibo->getId() ?>" target="_blank">
                    <img src='imgs/btn_pdf.png' width='20' border='0' title="Ver Recibo" />
                </a>
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_RECIBO_GESTION_ACCION_ENVIAR_POR_CORREO')) { ?>
            <li class='adm_botones_accion vta-recibo-enviar-por-correo'>
                <img src='imgs/btn_email.png' width='20' border='0' title="Enviar Email" />
            </li>
        <?php } ?>
            
        <?php if (UsCredencial::getEsAcreditado('VTA_RECIBO_GESTION_ACCION_MODIFICAR')) { ?>
            <?php if ($vta_recibo->getVtaReciboTipoEstado()->getCodigo() == VtaReciboTipoEstado::TIPO_PENDIENTE || true) { ?>
                <li class='adm_botones_accion modificar-datos'>
                    <img src='imgs/btn_modi.gif' width='20' border='0' />
                </li>
            <?php } ?>
        <?php } ?>
            
        <?php if (UsCredencial::getEsAcreditado('VTA_RECIBO_GESTION_ACCION_CONFIG')) { ?>
            <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/vta_recibo_gestion/db_context_acciones.php?id=<?php Gral::_echo($vta_recibo->getId()) ?>' modulo_metodo_init="setInitVtaReciboGestion()">
                <img src='imgs/btn_ajustar.png' width='20' />    	
            </li>
        <?php } ?>            

    </ul>
</td>


