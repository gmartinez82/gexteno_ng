<?php
$vta_ajuste_debe_vta_orden_ventas = $vta_ajuste_debe->getVtaAjusteDebeVtaOrdenVentas();
$vta_ajuste_debe_items = $vta_ajuste_debe->getVtaAjusteDebeItems();
$cantidad_items = count($vta_ajuste_debe_vta_orden_ventas) + count($vta_ajuste_debe_items);
$vta_tipo_origen_ajuste_debe = $vta_ajuste_debe->getVtaTipoOrigenAjusteDebe();

$cli_cliente = $vta_ajuste_debe->getCliCliente();

$vta_ajuste_debe_vta_nota_creditos = $vta_ajuste_debe->getVtaAjusteDebeVtaNotaCreditos(null, null, true);
$vta_ajuste_debe_vta_recibos = $vta_ajuste_debe->getVtaAjusteDebeVtaRecibos(null, null, true);
$vta_ajuste_debe_vta_ajuste_habers = $vta_ajuste_debe->getVtaAjusteDebeVtaAjusteHabers(null, null, true);

// se obtienen observaciones de afip
$ws_fe_ope_solicitud_respuesta_observacions = $vta_ajuste_debe->getWsFeOpeSolicitudRespuestaObservacions();

$vta_comision_activa_preventista = $vta_ajuste_debe->getVtaComisionActiva($vta_ajuste_debe->getVtaPreventistaId(), false, false);
$vta_comision_activa_comprador = $vta_ajuste_debe->getVtaComisionActiva(false, $vta_ajuste_debe->getVtaCompradorId(), false);
$vta_comision_activa_vendedor = $vta_ajuste_debe->getVtaComisionActiva(false, false, $vta_ajuste_debe->getVtaVendedorId());
?>

<td align='center' class='adm_tbl_lineas <?php echo $noleido ?> <?php echo $destacado ?>'>
    <div class="checkbox">
        <input type="checkbox" class="textbox chk_vta_ajuste_debe" id="chk_vta_ajuste_debe_<?php echo $vta_ajuste_debe->getId() ?>" name="chk_vta_ajuste_debe[<?php echo $vta_ajuste_debe->getId() ?>]" value="<?php echo $vta_ajuste_debe->getId() ?>" />
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="codigo">
        <?php Gral::_echo($vta_ajuste_debe->getCodigo()) ?>
    </div>
    <div class="fecha_emision" title="<?php Gral::_echo(Gral::getFechaHoraToWeb($vta_ajuste_debe->getCreado())) ?>">
        <?php Gral::_echo(Gral::getFechaToWeb($vta_ajuste_debe->getFechaEmision())) ?>
    </div>
    <div class="tipo-origen <?php Gral::_echo($vta_tipo_origen_ajuste_debe->getCodigo()) ?>">
        <?php Gral::_echo($vta_tipo_origen_ajuste_debe->getDescripcion()) ?>
    </div>        
    <div class="actividad" title="<?php Gral::_echo($vta_ajuste_debe->getGralActividad()->getDescripcion()) ?> - <?php Gral::_echo($vta_ajuste_debe->getGralEscenario()->getDescripcion()) ?>">
        <?php Gral::_echo($vta_ajuste_debe->getGralActividad()->getCodigoMin()) ?>
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

        <?php Gral::_echo($vta_ajuste_debe->getPersonaDescripcion()) ?>
    </div>
    <div class="documento">
        <?php Gral::_echo($vta_ajuste_debe->getGralTipoDocumento()->getDescripcion()) ?>: 
        <?php Gral::_echo($vta_ajuste_debe->getPersonaDocumento()) ?>
    </div>
    <div class="email">
        <?php Gral::_echo($vta_ajuste_debe->getPersonaEmail()) ?>
    </div>

    <div class="emails_enviados">
        <?php foreach ($vta_ajuste_debe->getVtaAjusteDebeEnviados() as $vta_ajuste_debe_enviado) { ?>
            <?php if ($vta_ajuste_debe_enviado->getEstado()) { ?>
                <img src="imgs/email/icn_email_green.png" alt="icn-email" width="14" title="Enviado a '<?php echo $vta_ajuste_debe_enviado->getDestinatario() ?>' el <?php echo Gral::getFechaHoraToWEB($vta_ajuste_debe_enviado->getCreado()) ?>">
            <?php } else { ?>
                <img src="imgs/email/icn_email_red.png" alt="icn-email" width="14" title="No Enviado: '<?php echo $vta_ajuste_debe_enviado->getCodigoEnvio() ?>'">
            <?php } ?>
        <?php } ?>
    </div> 


    <?php if (UsCredencial::getEsAcreditado('VTA_AJUSTE_DEBE_GESTION_BLOQUE_COMISIONISTAS')) { ?>
        <div class="bloque-comisionistas">

            <div class="comisionista preventista <?php echo ($vta_comision_activa_preventista) ? 'comisionado' : '' ?>">
                <div class="label">Preventista</div>
                <div class="dato"><?php Gral::_echo($vta_ajuste_debe->getVtaPreventista()->getDescripcion()) ?></div>

                <?php if ($vta_comision_activa_preventista) { ?>
                    <div class="codigo-comision"><?php Gral::_echo($vta_comision_activa_preventista->getCodigo()) ?></div>
                <?php } ?>
            </div>
            <div class="comisionista comprador <?php echo ($vta_comision_activa_comprador) ? 'comisionado' : '' ?>">
                <div class="label">Comprador</div>
                <div class="dato"><?php Gral::_echo($vta_ajuste_debe->getVtaComprador()->getDescripcion()) ?></div>

                <?php if ($vta_comision_activa_comprador) { ?>
                    <div class="codigo-comision"><?php Gral::_echo($vta_comision_activa_comprador->getCodigo()) ?></div>
                <?php } ?>
            </div>
            <div class="comisionista vendedor <?php echo ($vta_comision_activa_vendedor) ? 'comisionado' : '' ?>">
                <div class="label">Vendedor</div>
                <div class="dato"><?php Gral::_echo($vta_ajuste_debe->getVtaVendedor()->getDescripcion()) ?></div>

                <?php if ($vta_comision_activa_vendedor) { ?>
                    <div class="codigo-comision"><?php Gral::_echo($vta_comision_activa_vendedor->getCodigo()) ?></div>
                <?php } ?>
            </div>

        </div>
    <?php } ?>

</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="sucursal">
        <?php Gral::_echo($vta_ajuste_debe->getGralSucursal()->getDescripcion()) ?>
    </div>
    
    <div class="vta_ajuste_debe_tipo_estado">
        <img src="imgs/vta_ajuste_debe_tipo_estado/<?php Gral::_echo($vta_ajuste_debe->getVtaAjusteDebeTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
        <?php Gral::_echo($vta_ajuste_debe->getVtaAjusteDebeTipoEstado()->getDescripcion()) ?>
    </div>

    <div class="vta-comprobantes-vinculados">
        <?php foreach ($vta_ajuste_debe_vta_nota_creditos as $vta_ajuste_debe_vta_nota_credito) { ?>
            <div class="vta-comprobante-vinculado">-
                <?php Gral::_echo($vta_ajuste_debe_vta_nota_credito->getVtaNotaCredito()->getTipoComprobanteSiglas()) ?>
                <?php Gral::_echo($vta_ajuste_debe_vta_nota_credito->getVtaNotaCredito()->getNumeroNotaCreditoCompleto()) ?>
                (<?php Gral::_echoImp($vta_ajuste_debe_vta_nota_credito->getImporteAfectado()) ?>)
            </div>
        <?php } ?>
        <?php foreach ($vta_ajuste_debe_vta_recibos as $vta_ajuste_debe_vta_recibo) { ?>
            <div class="vta-comprobante-vinculado">-
                <?php Gral::_echo($vta_ajuste_debe_vta_recibo->getVtaRecibo()->getCodigo()) ?>
                (<?php Gral::_echoImp($vta_ajuste_debe_vta_recibo->getImporteAfectado()) ?>)
            </div>
        <?php } ?>
        <?php foreach ($vta_ajuste_debe_vta_ajuste_habers as $vta_ajuste_debe_vta_ajuste_haber) { ?>
            <div class="vta-comprobante-vinculado">-
                <?php Gral::_echo($vta_ajuste_debe_vta_ajuste_haber->getVtaAjusteHaber()->getCodigo()) ?>
                (<?php Gral::_echoImp($vta_ajuste_debe_vta_ajuste_haber->getImporteAfectado()) ?>)
            </div>
        <?php } ?>
        
    </div>

</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vta_tipo_ajuste_debe">
        <?php Gral::_echo($vta_ajuste_debe->getVtaTipoAjusteDebe()->getCodigoMin()) ?>
    </div>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="subtotal">
        <?php Gral::_echoImp($vta_ajuste_debe->getVtaAjusteDebeSubtotal()) ?>
    </div>

    <?php if ($vta_ajuste_debe->getVtaAjusteDebeIva() > 0) { ?>
        <div class="iva">
            + IVA: <?php Gral::_echoImp($vta_ajuste_debe->getVtaAjusteDebeIva()) ?>
        </div>
    <?php } ?>

    <?php if ($vta_ajuste_debe->getVtaAjusteDebeTributo() > 0) { ?>
        <div class="tributos">
            + Trib: <?php Gral::_echoImp($vta_ajuste_debe->getVtaAjusteDebeTributo()) ?>
        </div>
    <?php } ?>
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="total">
        <?php Gral::_echoImp($vta_ajuste_debe->getVtaAjusteDebeTotal()) ?>
    </div>
    <div class="forma-pago" title="<?php Gral::_echo($vta_ajuste_debe->getGralFpCuota()->getDescripcionCompleta()) ?>">
        <?php Gral::_echo(substr($vta_ajuste_debe->getGralFpCuota()->getDescripcionCompleta(), 0, 42)) ?>        
    </div>

</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="items">
        <?php Gral::_echo($cantidad_items) ?>
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="numero_ajuste_debe" title="Numero de AjusteDebe AFIP">
        <?php Gral::_echo($vta_ajuste_debe->getNumeroComprobanteCompleto()) ?>
    </div>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>

    <ul class="adm_botones_acciones" vta_ajuste_debe_id="<?php echo $vta_ajuste_debe->getId() ?>">

        <?php if (UsCredencial::getEsAcreditado('VTA_AJUSTE_DEBE_GESTION_ACCION_FICHA')) { ?>
            <li class='adm_botones_accion vta_ajuste_debe_gestion_ver_ficha'>
                <img src='imgs/btn_ficha.png' width='16' border='0' />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_AJUSTE_DEBE_GESTION_ACCION_COMPROBANTE')) { ?>
                <li class='adm_botones_accion vta-ajuste-debe-comprobante'>
                    <a href="ajax/modulos/vta_ajuste_debe_gestion/pdf_ajuste_debe.php?vta_ajuste_debe_id=<?php echo $vta_ajuste_debe->getId() ?>" target="_blank">
                        <img src='imgs/btn_pdf.png' width='20' border='0' title="Ver AjusteDebe" />
                    </a>
                </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_AJUSTE_DEBE_GESTION_ACCION_ENVIAR_POR_CORREO')) { ?>
                <li class='adm_botones_accion vta-ajuste-debe-enviar-por-correo'>
                    <img src='imgs/btn_email.png' width='20' border='0' title="Enviar Email" />
                </li>
        <?php } ?>
                
        <?php if (UsCredencial::getEsAcreditado('VTA_AJUSTE_DEBE_GESTION_ACCION_GENERAR_NOTA_CREDITO')) { ?>
            <?php if ($vta_ajuste_debe->getVtaAjusteDebeTipoEstado()->getCodigo() == VtaAjusteDebeTipoEstado::TIPO_PENDIENTE || $vta_ajuste_debe->getVtaAjusteDebeTipoEstado()->getCodigo() == VtaAjusteDebeTipoEstado::TIPO_ANULADO_PARCIAL) { ?>
                <li class='adm_botones_accion vta-ajuste-debe-gestion-generar-nota-credito-afip'>
                    <img src='imgs/btn_publicado_0.png' width='20' border='0' title="Generar NC por Devolucion" />
                </li>
            <?php } ?>            
        <?php } ?>                

        <?php if (UsCredencial::getEsAcreditado('VTA_AJUSTE_DEBE_GESTION_ACCION_MODIFICAR')) { ?>
            <li class='adm_botones_accion modificar-datos'>
                <img src='imgs/btn_modi.gif' width='20' border='0' />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_AJUSTE_DEBE_GESTION_ACCION_CONFIG')) { ?>
            <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/vta_ajuste_debe_gestion/db_context_acciones.php?id=<?php Gral::_echo($vta_ajuste_debe->getId()) ?>' modulo_metodo_init="setInitVtaAjusteDebeGestion()">
                <img src='imgs/btn_ajustar.png' width='20' />    	
            </li>
        <?php } ?>            

    </ul>
</td>


