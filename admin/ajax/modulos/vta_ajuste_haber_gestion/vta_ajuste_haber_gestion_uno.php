<?php
$cantidad_items = $vta_ajuste_haber->getVtaAjusteHaberCantidadItems();
$vta_tipo_origen_ajuste_haber = $vta_ajuste_haber->getVtaTipoOrigenAjusteHaber();

$cli_cliente = $vta_ajuste_haber->getCliCliente();
$fnd_caja = $vta_ajuste_haber->getFndCaja();

$vta_factura_vta_ajuste_habers = $vta_ajuste_haber->getVtaFacturaVtaAjusteHabers(null, null, true);
$vta_nota_debito_vta_ajuste_habers = $vta_ajuste_haber->getVtaNotaDebitoVtaAjusteHabers(null, null, true);
$vta_ajuste_debe_vta_ajuste_habers = $vta_ajuste_haber->getVtaAjusteDebeVtaAjusteHabers(null, null, true);

?>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vermasinfo" identificador="<?php echo $vta_ajuste_haber->getId() ?>" modulo="vta_ajuste_haber_gestion">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="codigo">
        <?php Gral::_echo($vta_ajuste_haber->getCodigo()) ?>
    </div>
    <div class="fecha_emision" title="<?php Gral::_echo(Gral::getFechaHoraToWeb($vta_ajuste_haber->getCreado())) ?>">
        <?php Gral::_echo(Gral::getFechaToWeb($vta_ajuste_haber->getFechaEmision())) ?>
    </div>
    <div class="tipo-origen <?php Gral::_echo($vta_tipo_origen_ajuste_haber->getCodigo()) ?>">
        <?php Gral::_echo($vta_tipo_origen_ajuste_haber->getDescripcion()) ?>
    </div>    
</td>	
<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>    
    <div class="cliente">
        <?php if ($cli_cliente->getId() != 'null') { ?>
            <?php if ($cli_cliente->getGralTipoPersoneria()->getCodigo() == GralTipoPersoneria::TIPO_PERSONA_JURIDICA) { ?>
                <img src="imgs/icon_cliente_empresa.png" alt="icn-email" width="18" title="<?php Gral::_echo($cli_cliente->getGralTipoPersoneria()->getDescripcion()) ?>" />
            <?php } elseif ($cli_cliente->getGralTipoPersoneria()->getCodigo() == GralTipoPersoneria::TIPO_PERSONA_JURIDICA) { ?>
                <img src="imgs/icon_cliente_particular.png" alt="icn-email" width="18" title="<?php Gral::_echo($cli_cliente->getGralTipoPersoneria()->getDescripcion()) ?>" />
            <?php } ?>
        <?php } ?>

        <?php Gral::_echo($vta_ajuste_haber->getPersonaDescripcion()) ?>
    </div>
    <div class="documento">
        <?php if ($vta_ajuste_haber->getPersonaDocumento() != '') { ?>        
        <?php Gral::_echo($vta_ajuste_haber->getGralTipoDocumento()->getDescripcion()) ?>: 
        <?php Gral::_echo($vta_ajuste_haber->getPersonaDocumento()) ?>
        <?php } ?>
    </div>
    <div class="localidad">
        <?php Gral::_echo($vta_ajuste_haber->getCliCliente()->getGeoLocalidad()->getDescripcionFull()); ?>
    </div>
    <div class="email">
        <?php Gral::_echo($vta_ajuste_haber->getPersonaEmail()) ?>
    </div>

    <div class="emails_enviados">
        <?php foreach ($vta_ajuste_haber->getVtaAjusteHaberEnviados() as $vta_ajuste_haber_enviado) { ?>
            <?php if ($vta_ajuste_haber_enviado->getEstado()) { ?>
                <img src="imgs/email/icn_email_green.png" alt="icn-email" width="14" title="Enviado a '<?php echo $vta_ajuste_haber_enviado->getDestinatario() ?>' el <?php echo Gral::getFechaHoraToWEB($vta_ajuste_haber_enviado->getCreado()) ?>">
            <?php } else { ?>
                <img src="imgs/email/icn_email_red.png" alt="icn-email" width="14" title="No Enviado: '<?php echo $vta_ajuste_haber_enviado->getCodigoEnvio() ?>'">
            <?php } ?>
        <?php } ?>
    </div>
    
    <?php if ($fnd_caja && $fnd_caja->getId() != 'null') { ?>
        <div class="fnd-caja">
            <img src="imgs/fnd_caja_tipo_estado/<?php Gral::_echo($vta_ajuste_haber->getFndCaja()->getFndCajaTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="8" title="<?php Gral::_echo($vta_ajuste_haber->getFndCaja()->getFndCajaTipoEstado()->getDescripcion()) ?>" />
            <?php Gral::_echo($vta_ajuste_haber->getFndCaja()->getDescripcion()) ?>
        </div>    
    <?php } ?>
    
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vta_ajuste_haber_tipo_estado">
        <img src="imgs/vta_ajuste_haber_tipo_estado/<?php Gral::_echo($vta_ajuste_haber->getVtaAjusteHaberTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
        <?php Gral::_echo($vta_ajuste_haber->getVtaAjusteHaberTipoEstado()->getDescripcion()) ?>
    </div>

    <div class="vta-comprobantes-vinculados">
        <?php foreach ($vta_factura_vta_ajuste_habers as $vta_factura_vta_ajuste_haber)  { ?>
            <div class="vta-comprobante-vinculado">
                <?php Gral::_echo($vta_factura_vta_ajuste_haber->getVtaFactura()->getTipoComprobanteSiglas()) ?>
                <?php Gral::_echo($vta_factura_vta_ajuste_haber->getVtaFactura()->getNumeroFacturaCompleto()) ?>
                (<?php Gral::_echoImp($vta_factura_vta_ajuste_haber->getImporteAfectado()) ?>)
            </div>
        <?php } ?>
        <?php foreach ($vta_nota_debito_vta_ajuste_habers as $vta_nota_debito_vta_ajuste_haber) { ?>
            <div class="vta-comprobante-vinculado">
                <?php Gral::_echo($vta_nota_debito_vta_ajuste_haber->getVtaNotaDebito()->getTipoComprobanteSiglas()) ?>
                <?php Gral::_echo($vta_nota_debito_vta_ajuste_haber->getVtaNotaDebito()->getNumeroNotaDebitoCompleto()) ?>
                (<?php Gral::_echoImp($vta_nota_debito_vta_ajuste_haber->getImporteAfectado()) ?>)
            </div>
        <?php } ?>

        <?php foreach ($vta_ajuste_debe_vta_ajuste_habers as $vta_ajuste_debe_vta_ajuste_haber) { ?>
            <div class="vta-comprobante-vinculado">
                <?php Gral::_echo($vta_ajuste_debe_vta_ajuste_haber->getVtaAjusteDebe()->getCodigo()) ?>
                (<?php Gral::_echoImp($vta_ajuste_debe_vta_ajuste_haber->getImporteAfectado()) ?>)
            </div>
        <?php } ?>
    </div>
    
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vta_tipo_ajuste_haber">	
        <?php Gral::_echo($vta_ajuste_haber->getVtaTipoAjusteHaber()->getCodigoMin()) ?>
    </div>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="subtotal">
        <?php Gral::_echoImp($vta_ajuste_haber->getVtaAjusteHaberSubtotal()) ?>
    </div>

    <?php if($vta_ajuste_haber->getVtaAjusteHaberIva() > 0){ ?>
    <div class="iva">
        + IVA: <?php Gral::_echoImp($vta_ajuste_haber->getVtaAjusteHaberIva()) ?>
    </div>
    <?php } ?>

    <?php if($vta_ajuste_haber->getVtaAjusteHaberTributo() > 0){ ?>
    <div class="tributos">
        + Trib: <?php Gral::_echoImp($vta_ajuste_haber->getVtaAjusteHaberTributo()) ?>
    </div>
    <?php } ?>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="total">
        <?php Gral::_echoImp($vta_ajuste_haber->getVtaAjusteHaberTotal()) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="items">
        <?php Gral::_echo($cantidad_items) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php //echo $estado ?> <?php //echo $publicado ?>'>
    <div class="numero_ajuste_haber"  title="Numero de Comprobante">
        <?php Gral::_echo($vta_ajuste_haber->getNumeroComprobanteCompleto()) ?>
    </div>
    <?php if ($vta_ajuste_haber->getCodigoOpCliente() != '') { ?>
        <div class="codigo-op-cliente">
            <?php Gral::_echo($vta_ajuste_haber->getCodigoOpCliente()) ?>
        </div>    
    <?php } ?>        
    <div class="vta-ajuste-haber-condicion-pago">	
        <?php Gral::_echo($vta_ajuste_haber->getVtaAjusteHaberCondicionPago()->getDescripcion()) ?>
    </div>
    <div class="vta-ajuste-haber-tipo-pago">	
        <?php Gral::_echo($vta_ajuste_haber->getVtaAjusteHaberTipoPago()->getDescripcion()) ?>
    </div>    
</td>	


<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <ul class="adm_botones_acciones" vta_ajuste_haber_id="<?php echo $vta_ajuste_haber->getId() ?>">

        <?php if (UsCredencial::getEsAcreditado('VTA_AJUSTE_HABER_GESTION_ACCION_FICHA')) { ?>
            <li class='adm_botones_accion vta_ajuste_haber_gestion_ver_ficha'>
                <img src='imgs/btn_ficha.png' width='16' border='0' />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_AJUSTE_HABER_GESTION_ACCION_COMPROBANTE')) { ?>
            <li class='adm_botones_accion vta-ajuste-haber-comprobante'>
                <a href="ajax/modulos/vta_ajuste_haber_gestion/pdf_ajuste_haber.php?vta_ajuste_haber_id=<?php echo $vta_ajuste_haber->getId() ?>" target="_blank">
                    <img src='imgs/btn_pdf.png' width='20' border='0' title="Ver AjusteHaber" />
                </a>
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_AJUSTE_HABER_GESTION_ACCION_ENVIAR_POR_CORREO')) { ?>
            <li class='adm_botones_accion vta-ajuste-haber-enviar-por-correo'>
                <img src='imgs/btn_email.png' width='20' border='0' title="Enviar Email" />
            </li>
        <?php } ?>
            
        <?php if (UsCredencial::getEsAcreditado('VTA_AJUSTE_HABER_GESTION_ACCION_MODIFICAR')) { ?>
            <?php if ($vta_ajuste_haber->getVtaAjusteHaberTipoEstado()->getCodigo() == VtaAjusteHaberTipoEstado::TIPO_PENDIENTE || true) { ?>
                <li class='adm_botones_accion modificar-datos'>
                    <img src='imgs/btn_modi.gif' width='20' border='0' />
                </li>
            <?php } ?>
        <?php } ?>
            
            
        <?php if (UsCredencial::getEsAcreditado('VTA_AJUSTE_HABER_GESTION_ACCION_CONFIG')) { ?>
            <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/vta_ajuste_haber_gestion/db_context_acciones.php?id=<?php Gral::_echo($vta_ajuste_haber->getId()) ?>' modulo_metodo_init="setInitVtaAjusteHaberGestion()">
                <img src='imgs/btn_ajustar.png' width='20' />    	
            </li>
        <?php } ?>            

    </ul>
</td>


