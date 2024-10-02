<?php
$vta_factura_vta_orden_ventas = $vta_factura->getVtaFacturaVtaOrdenVentas();
$vta_factura_items = $vta_factura->getVtaFacturaItems();
$cantidad_items = count($vta_factura_vta_orden_ventas) + count($vta_factura_items);
$vta_tipo_origen_factura = $vta_factura->getVtaTipoOrigenFactura();

$cli_cliente = $vta_factura->getCliCliente();

$vta_factura_vta_nota_creditos = $vta_factura->getVtaFacturaVtaNotaCreditos(null, null, true);
$vta_factura_vta_recibos = $vta_factura->getVtaFacturaVtaRecibos(null, null, true);

// se obtienen observaciones de afip
$ws_fe_ope_solicitud_respuesta_observacions = $vta_factura->getWsFeOpeSolicitudRespuestaObservacions();

$vta_comision_activa_preventista = $vta_factura->getVtaComisionActiva($vta_factura->getVtaPreventistaId(), false, false);
$vta_comision_activa_comprador = $vta_factura->getVtaComisionActiva(false, $vta_factura->getVtaCompradorId(), false);
$vta_comision_activa_vendedor = $vta_factura->getVtaComisionActiva(false, false, $vta_factura->getVtaVendedorId());

// -----------------------------------------------------------------------------
// Info SIFEN del Comprobante
// -----------------------------------------------------------------------------
$eku_des = $vta_factura->getEkuDesDelComprobante();
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

<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <div class="checkbox">
        <input type="checkbox" class="textbox chk_vta_factura" id="chk_vta_factura_<?php echo $vta_factura->getId() ?>" name="chk_vta_factura[<?php echo $vta_factura->getId() ?>]" value="<?php echo $vta_factura->getId() ?>" />
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="codigo">
        <?php Gral::_echo($vta_factura->getCodigo()) ?>
    </div>
    <div class="fecha_emision" title="<?php Gral::_echo(Gral::getFechaHoraToWeb($vta_factura->getCreado())) ?>">
        <?php Gral::_echo(Gral::getFechaToWeb($vta_factura->getFechaEmision())) ?>
    </div>
    <div class="tipo-origen <?php Gral::_echo($vta_tipo_origen_factura->getCodigo()) ?>">
        <?php Gral::_echo($vta_tipo_origen_factura->getDescripcion()) ?>
    </div>        
    <div class="actividad" title="<?php Gral::_echo($vta_factura->getGralActividad()->getDescripcion()) ?> - <?php Gral::_echo($vta_factura->getGralEscenario()->getDescripcion()) ?>">
        <?php Gral::_echo($vta_factura->getGralActividad()->getCodigoMin()) ?>
    </div>

</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    
    <div class="cliente">
        
        <?php if ($cli_cliente->getId() != 'null') { ?>
            <?php if ($cli_cliente->getGralTipoPersoneria()->getCodigo() == GralTipoPersoneria::TIPO_PERSONA_JURIDICA) { ?>
                <img src="imgs/icon_cliente_empresa.png" alt="icn-tipo-cliente" width="28" title="<?php Gral::_echo($cli_cliente->getGralTipoPersoneria()->getDescripcion()) ?>" />
            <?php } elseif ($cli_cliente->getGralTipoPersoneria()->getCodigo() == GralTipoPersoneria::TIPO_PERSONA_FISICA) { ?>
                <img src="imgs/icon_cliente_particular.png" alt="icn-tipo-cliente" width="28" title="<?php Gral::_echo($cli_cliente->getGralTipoPersoneria()->getDescripcion()) ?>" />
            <?php } ?>
        <?php } ?>

        <div class="cliente-info">
            <div class="persona-descripcion">
                <?php Gral::_echo($vta_factura->getPersonaDescripcion()) ?>
            </div>
            <div class="cliente-descripcion">
                <?php Gral::_echo($cli_cliente->getDescripcion()) ?>
            </div>
        </div>
    </div>
    <div class="documento">
        <?php Gral::_echo($vta_factura->getGralTipoDocumento()->getDescripcion()) ?>: 
        <?php Gral::_echo($vta_factura->getPersonaDocumento()) ?>
    </div>
    <div class="tipo-cliente">
        <?php Gral::_echo($cli_cliente->getCliTipoCliente()->getDescripcion()) ?>
    </div>
    <div class="email">
        <?php Gral::_echo($vta_factura->getPersonaEmail()) ?>
    </div>

    <div class="emails_enviados">
        <?php foreach ($vta_factura->getVtaFacturaEnviados() as $vta_factura_enviado) { ?>
            <?php if ($vta_factura_enviado->getEstado()) { ?>
                <img src="imgs/email/icn_email_green.png" alt="icn-email" width="14" title="Enviado a '<?php echo $vta_factura_enviado->getDestinatario() ?>' el <?php echo Gral::getFechaHoraToWEB($vta_factura_enviado->getCreado()) ?>">
            <?php } else { ?>
                <img src="imgs/email/icn_email_red.png" alt="icn-email" width="14" title="No Enviado: '<?php echo $vta_factura_enviado->getCodigoEnvio() ?>'">
            <?php } ?>
        <?php } ?>
    </div> 

    <?php if (UsCredencial::getEsAcreditado('VTA_FACTURA_GESTION_BLOQUE_COMISIONISTAS')) { ?>
        <div class="bloque-comisionistas">

            <div class="comisionista preventista <?php echo ($vta_comision_activa_preventista) ? 'comisionado' : '' ?>">
                <div class="label">Preventista</div>
                <div class="dato"><?php Gral::_echo($vta_factura->getVtaPreventista()->getDescripcion()) ?></div>

                <?php if ($vta_comision_activa_preventista) { ?>
                    <div class="codigo-comision"><?php Gral::_echo($vta_comision_activa_preventista->getCodigo()) ?></div>
                <?php } ?>
            </div>
            <div class="comisionista comprador <?php echo ($vta_comision_activa_comprador) ? 'comisionado' : '' ?>">
                <div class="label">Comprador</div>
                <div class="dato"><?php Gral::_echo($vta_factura->getVtaComprador()->getDescripcion()) ?></div>

                <?php if ($vta_comision_activa_comprador) { ?>
                    <div class="codigo-comision"><?php Gral::_echo($vta_comision_activa_comprador->getCodigo()) ?></div>
                <?php } ?>
            </div>
            <div class="comisionista vendedor <?php echo ($vta_comision_activa_vendedor) ? 'comisionado' : '' ?>">
                <div class="label">Vendedor</div>
                <div class="dato"><?php Gral::_echo($vta_factura->getVtaVendedor()->getDescripcion()) ?></div>

                <?php if ($vta_comision_activa_vendedor) { ?>
                    <div class="codigo-comision"><?php Gral::_echo($vta_comision_activa_vendedor->getCodigo()) ?></div>
                <?php } ?>
            </div>

        </div>
    <?php } ?>

    
    
    
    
    
    <?php foreach($eku_des as $eku_de){ ?>
    <div class="bloque-eku-de" style="border: #ccc solid 1px; background-color: #ffffff; padding: 5px; margin: 5px; font-size: 11px; color: <?php Gral::_echo($eku_de->getEkuDeOpeTipoEstado()->getColor()) ?>;">
            <?php Gral::_echo($eku_de->getDescripcionCompleta()) ?>
        </div>
    <?php } ?>
    
    
    
    
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="sucursal">
        <?php Gral::_echo($vta_factura->getGralSucursal()->getDescripcion()) ?>
    </div>
    
    <div class="vta_factura_tipo_estado">
        <img src="imgs/vta_factura_tipo_estado/<?php Gral::_echo($vta_factura->getVtaFacturaTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
        <?php Gral::_echo($vta_factura->getVtaFacturaTipoEstado()->getDescripcion()) ?>
    </div>

    <div class="vta-comprobantes-vinculados">
        <?php foreach ($vta_factura_vta_nota_creditos as $vta_factura_vta_nota_credito) { ?>
            <div class="vta-comprobante-vinculado">-
                <?php Gral::_echo($vta_factura_vta_nota_credito->getVtaNotaCredito()->getTipoComprobanteSiglas()) ?>
                <?php Gral::_echo($vta_factura_vta_nota_credito->getVtaNotaCredito()->getNumeroNotaCreditoCompleto()) ?>
                (<?php Gral::_echoImp($vta_factura_vta_nota_credito->getImporteAfectado()) ?>)
            </div>
        <?php } ?>
        <?php foreach ($vta_factura_vta_recibos as $vta_factura_vta_recibo) { ?>
            <div class="vta-comprobante-vinculado">-
                <?php Gral::_echo($vta_factura_vta_recibo->getVtaRecibo()->getCodigo()) ?>
                (<?php Gral::_echoImp($vta_factura_vta_recibo->getImporteAfectado()) ?>)
            </div>
        <?php } ?>
    </div>

</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vta_tipo_factura">
        <?php Gral::_echo($vta_factura->getVtaTipoFactura()->getCodigoMin()) ?>
    </div>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="subtotal">
        <?php Gral::_echoImp($vta_factura->getVtaFacturaSubtotal()) ?>
    </div>

    <?php if ($vta_factura->getVtaFacturaIva() > 0) { ?>
        <div class="iva">
            + IVA: <?php Gral::_echoImp($vta_factura->getVtaFacturaIva()) ?>
        </div>
    <?php } ?>

    <?php if ($vta_factura->getVtaFacturaTributo() > 0) { ?>
        <div class="tributos">
            + Trib: <?php Gral::_echoImp($vta_factura->getVtaFacturaTributo()) ?>
        </div>
    <?php } ?>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="total">
        <?php Gral::_echoImp($vta_factura->getVtaFacturaTotal()) ?>
    </div>
    <div class="forma-pago" title="<?php Gral::_echo($vta_factura->getGralFpCuota()->getDescripcionCompleta()) ?>">
        <?php Gral::_echo(substr($vta_factura->getGralFpCuota()->getDescripcionCompleta(), 0, 25)) ?>        
    </div>

</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="items">
        <?php Gral::_echo($cantidad_items) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    
    <div class="numero_timbrado" title="Numero de Timbrado">
        <?php Gral::_echo($vta_factura->getNumeroTimbrado()) ?>
    </div>
    <div class="numero_factura" title="Numero de Factura AFIP">
        <?php Gral::_echo($vta_factura->getNumeroComprobanteCompleto()) ?>
    </div>
    <?php if ($vta_factura->getCae() != '') { ?>
        <div class="cae" title="CAE">
            <?php Gral::_echo($vta_factura->getCae()) ?>
        </div>
        <div class="fecha_emision_cae" title="Fecha de Vencimiento de CAE">
            <?php Gral::_echo(Gral::getFechaToWeb($vta_factura->getCaeVencimiento())) ?>
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

    <ul class="adm_botones_acciones" vta_factura_id="<?php echo $vta_factura->getId() ?>">

        <?php if (UsCredencial::getEsAcreditado('VTA_FACTURA_GESTION_ACCION_FICHA')) { ?>
            <li class='adm_botones_accion vta_factura_gestion_ver_ficha'>
                <img src='imgs/btn_ficha.png' width='16' border='0' />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_FACTURA_GESTION_ACCION_COMPROBANTE')) { ?>
            <?php if ($vta_factura->getCae() != '') { ?>
                <li class='adm_botones_accion vta-factura-comprobante'>
                    <a href="ajax/modulos/vta_factura_gestion/pdf_factura.php?vta_factura_id=<?php echo $vta_factura->getId() ?>" target="_blank">
                        <img src='imgs/btn_pdf.png' width='20' border='0' title="Ver Factura" />
                    </a>
                </li>
            <?php } ?>
        <?php } ?>
                
        <?php if (UsCredencial::getEsAcreditado('VTA_FACTURA_GESTION_ACCION_COMPROBANTE')) { ?>
            <?php if ($vta_factura->getCae() != '') { ?>
                <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/vta_factura_gestion/db_context_acciones_comprobante.php?id=<?php Gral::_echo($vta_factura->getId()) ?>' modulo_metodo_init="setInitVtaFacturaGestion()">
                    <img src='imgs/btn_pdf.png' width='20' title="Ver Comprobante PDF" />    	
                </li>
            <?php } ?> 
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_FACTURA_GESTION_ACCION_ENVIAR_POR_CORREO')) { ?>
            <?php if ($vta_factura->getCae() != '') { ?>
                <li class='adm_botones_accion vta-factura-enviar-por-correo'>
                    <img src='imgs/btn_email.png' width='20' border='0' title="Enviar Email" />
                </li>
            <?php } ?>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_FACTURA_GESTION_ACCION_GENERAR_FACTURA_AFIP')) { ?>
            <?php if (empty($vta_factura->getCae()) && !$vta_factura->getVtaFacturaTipoEstado()->getAnulado()) { ?>
                <li class='adm_botones_accion vta-factura-gestion-generar-factura-afip'>
                    <img src='imgs/btn_autorizar.png' width='21' border='0' title="Reintentar solicitud de CAE en AFIP (desde Administracion)" />
                </li>
            <?php } ?>
        <?php }elseif(UsCredencial::getEsAcreditado('VTA_FACTURA_GESTION_ACCION_GENERAR_FACTURA_AFIP_SUCURSAL')){ ?>
            <?php if ($vta_factura->getPermiteReintentarCAEParaSucursal()) { ?>
                <?php if (empty($vta_factura->getCae()) && !$vta_factura->getVtaFacturaTipoEstado()->getAnulado()) { ?>
                    <li class='adm_botones_accion vta-factura-gestion-generar-factura-afip'>
                        <img src='imgs/btn_publicar.png' width='18' border='0' title="Reintentar solicitud de CAE en AFIP (desde Sucursal)" />
                    </li>
                <?php } ?>
            <?php } ?>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_FACTURA_GESTION_ACCION_GENERAR_NOTA_CREDITO_AFIP')) { ?>
            <?php //if ($vta_factura->getVtaFacturaTipoEstado()->getImputable() == 1) { ?>
            <?php if (!empty($vta_factura->getCae())) { ?>
                <?php if ($vta_factura->getVtaFacturaTipoEstado()->getCodigo() == VtaFacturaTipoEstado::TIPO_PENDIENTE || $vta_factura->getVtaFacturaTipoEstado()->getCodigo() == VtaFacturaTipoEstado::TIPO_ANULADO_PARCIAL) { ?>
                    <li class='adm_botones_accion vta-factura-gestion-generar-nota-credito-afip'>
                        <img src='imgs/btn_publicado_0.png' width='20' border='0' title="Generar Nota de Credito AFIP" />
                    </li>
                <?php } ?>
            <?php } ?>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_FACTURA_GESTION_ACCION_MODIFICAR')) { ?>
            <li class='adm_botones_accion modificar-datos'>
                <img src='imgs/btn_modi.gif' width='20' border='0' />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_FACTURA_GESTION_ACCION_CONFIG')) { ?>
            <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/vta_factura_gestion/db_context_acciones.php?id=<?php Gral::_echo($vta_factura->getId()) ?>' modulo_metodo_init="setInitVtaFacturaGestion()">
                <img src='imgs/btn_ajustar.png' width='20' />    	
            </li>
        <?php } ?>            


    </ul>
</td>


