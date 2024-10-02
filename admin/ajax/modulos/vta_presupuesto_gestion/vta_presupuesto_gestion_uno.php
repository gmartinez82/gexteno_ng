<?php
$vta_presupuesto_tipo_estado = $vta_presupuesto->getVtaPresupuestoTipoEstado();
$vta_presupuesto_tipo_emision = $vta_presupuesto->getVtaPresupuestoTipoEmision();
$vta_presupuesto_tipo_venta = $vta_presupuesto->getVtaPresupuestoTipoVenta();
$vta_presupuesto_tipo_despacho = $vta_presupuesto->getVtaPresupuestoTipoDespacho();
$presupuesto_estado_terminal = $vta_presupuesto->getVtaPresupuestoTipoEstadoActualTerminal();
$cli_cliente = $vta_presupuesto->getCliCliente();

$vta_orden_venta = $vta_presupuesto->getVtaOrdenVenta();
$vta_orden_ventas = $vta_presupuesto->getVtaOrdenVentas();

$vta_factura = $vta_presupuesto->getVtaFactura();
$vta_remito = $vta_presupuesto->getVtaRemito();
$vta_recibo = $vta_presupuesto->getVtaRecibo();
$gral_sucursal = $vta_presupuesto->getGralSucursal();
?>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $destacado ?>'>
    <div class="vermasinfo" identificador="<?php echo $vta_presupuesto->getId() ?>" modulo="vta_presupuesto">+</div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $destacado ?>'>
    
    <div class="tipo-emision" title="<?php Gral::_echo($vta_presupuesto_tipo_emision->getDescripcion()) ?>" ><?php Gral::_echo($vta_presupuesto_tipo_emision->getCodigoMin()) ?></div>
    <div class="tipo-venta <?php Gral::_echo($vta_presupuesto_tipo_venta->getCodigo()) ?>" ><?php Gral::_echo($vta_presupuesto_tipo_venta->getDescripcion()) ?></div>
    
    <?php if(trim($vta_presupuesto->getNotaInterna()) != ''){ ?>
        <div class="nota-interna" title="<?php Gral::_echo($vta_presupuesto->getNotaInterna()) ?>">NI</div>
    <?php } ?>
    
    <?php if($us_usuario_autenticado && $us_usuario_autenticado->getId() == 1){ ?>
    <div class="tiempo-registro">
        <?php Gral::_echo($vta_presupuesto->getTiempoDeRegistroEnSegundos()) ?>
    </div>
    <?php } ?>
    
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $destacado ?>'>
    <div class="fecha" title="<?php Gral::_echo(Gral::getFechaHoraToWeb($vta_presupuesto->getCreado())) ?>">
        <?php Gral::_echo(Gral::getFechaToWeb($vta_presupuesto->getFecha())) ?>
    </div>
    <div class="codigo">
        <?php Gral::_echo($vta_presupuesto->getCodigo()) ?>
    </div>
    <div class="vendedor">
        <?php Gral::_echo($vta_presupuesto->getVtaVendedor()->getDescripcion()) ?>
    </div>    
    
    <?php if($vta_presupuesto->getCliClienteTienda()){ ?>
    <div class="cli-cliente-tienda-codigo">
        <?php Gral::_echo($vta_presupuesto->getCliClienteTienda()->getCodigo()) ?>
    </div>
    <?php } ?>  
    
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $destacado ?>'>
    <div class="cliente">
        <?php if ($cli_cliente->getId() != 'null') { ?>
            <?php if ($cli_cliente->getGralTipoPersoneria()->getCodigo() == GralTipoPersoneria::TIPO_PERSONA_JURIDICA) { ?>
                <img src="imgs/icon_cliente_empresa.png" alt="icn-email" width="18" title="<?php Gral::_echo($cli_cliente->getGralTipoPersoneria()->getDescripcion()) ?>" />
            <?php } elseif ($cli_cliente->getGralTipoPersoneria()->getCodigo() == GralTipoPersoneria::TIPO_PERSONA_FISICA) { ?>
                <img src="imgs/icon_cliente_particular.png" alt="icn-email" width="18" title="<?php Gral::_echo($cli_cliente->getGralTipoPersoneria()->getDescripcion()) ?>" />
            <?php } ?>
        <?php } ?>

        <?php Gral::_echo($vta_presupuesto->getPersonaDescripcion()) ?>
    </div>
    <div class="documento">
        <?php if ($vta_presupuesto->getPersonaDocumento() != '') { ?>
            <?php Gral::_echo($vta_presupuesto->getGralTipoDocumento()->getDescripcion()) ?>: 
            <?php Gral::_echo($vta_presupuesto->getPersonaDocumento()) ?>
        <?php } ?>
    </div>
    <div class="localidad">
        <?php Gral::_echo($vta_presupuesto->getCliCliente()->getGeoLocalidad()->getDescripcionFull()); ?>
    </div>
    <div class="email">
        <?php Gral::_echo($vta_presupuesto->getPersonaEmail()) ?>
    </div>
    
    <?php if($vta_presupuesto_tipo_emision->getCodigo() == VtaPresupuestoTipoEmision::TIPO_DIFERIDO){ ?>
        <?php if($vta_presupuesto->getGralSucursalRetiro() != 'null'){ ?>
        <div class="sucursal-retiro">
            Retira en <?php Gral::_echo($vta_presupuesto->getGralSucursalRetiroObj()->getDescripcion()) ?>
        </div>
        <?php } ?>

        <?php if($vta_presupuesto->getCliCentroRecepcionId() != 'null'){ ?>
        <div class="centro-recepcion">
            Entregar en <?php Gral::_echo($vta_presupuesto->getCliCentroRecepcion()->getDescripcion()) ?> - 
            <?php Gral::_echo($vta_presupuesto->getCliCentroRecepcion()->getDomicilio()) ?>
        </div>
        <?php } ?>
    <?php } ?>
    
    
    <?php if($vta_presupuesto->getCliCentroPedido()){ ?>
    <div class="centro-pedido">
        <?php Gral::_echo($vta_presupuesto->getCliCentroPedido()->getDescripcion()) ?>
    </div>
    <?php } ?>
    
    <?php if(trim($vta_presupuesto->getNotaCliente()) != ''){ ?>
    <div class="nota-cliente">
        NC: <?php Gral::_echo($vta_presupuesto->getNotaCliente()) ?>
    </div>
    <?php } ?>

    <?php if(trim($vta_presupuesto->getGralEmpresaTransportadoraId()) != 'null'){ ?>
    <div class="empresa-transportadora">
        ET: <?php Gral::_echo($vta_presupuesto->getGralEmpresaTransportadora()->getDescripcion()) ?>
    </div>
    <?php } ?>

    <div class="emails_enviados">
        <?php foreach ($vta_presupuesto->getVtaPresupuestoEnviados() as $vta_presupuesto_enviado) { ?>
            <?php if ($vta_presupuesto_enviado->getEstado()) { ?>
                <img src="imgs/email/icn_email_green.png" alt="icn-email" width="14" title="Enviado a '<?php echo $vta_presupuesto_enviado->getDestinatario() ?>' el <?php echo Gral::getFechaHoraToWEB($vta_presupuesto_enviado->getCreado()) ?>">
            <?php } else { ?>
                <img src="imgs/email/icn_email_red.png" alt="icn-email" width="14" title="No Enviado: '<?php echo $vta_presupuesto_enviado->getCodigoEnvio() ?>'">
            <?php } ?>
        <?php } ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $destacado ?>'>
    <div class="sucursal">
        <?php Gral::_echo($vta_presupuesto->getGralSucursal()->getDescripcion()) ?>
    </div>
    <div class="tipo-estado <?php Gral::_echo($vta_presupuesto->getVtaPresupuestoTipoEstado()->getCodigo()) ?>">
        <img src="imgs/vta_presupuesto_tipo_estado/<?php Gral::_echo($vta_presupuesto->getVtaPresupuestoTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
        <?php Gral::_echo($vta_presupuesto->getVtaPresupuestoTipoEstado()->getDescripcion()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $destacado ?>'>
    <div class="fecha-vencimiento">
        <?php Gral::_echo(Gral::getFechaToWeb($vta_presupuesto->getFechaVencimiento())) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $destacado ?>'>
    <div class="items">        
        <?php Gral::_echo($vta_presupuesto->getCantidadItems()) ?>
    </div>
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $destacado ?>'>
    <div class="importe-subtotal">
        <?php Gral::_echoImp($vta_presupuesto->getImporteTotalPresupuestoConDescuentoSinIva()) ?>
    </div>
    
    <?php if ($vta_presupuesto->getIncluyeLogistica() && $vta_presupuesto->getImporteLogistica() != 0) { ?>
        <div class="importe-logistica" title="<?php Gral::_echo("Logistica") ?> (<?php Gral::_echo($vta_presupuesto->getPorcentajeLogistica()) ?> %)">
            LOG: <?php Gral::_echoImp($vta_presupuesto->getImporteLogistica()) ?>
        </div>
    <?php } ?>
    
    <?php if ($vta_presupuesto->getIncluyeRecargo() && $vta_presupuesto->getImporteRecargo() != 0) { ?>
        <?php if ($vta_presupuesto->getImporteRecargo() > 0) { ?>
            <div class="importe-recargo" title="<?php Gral::_echo($vta_presupuesto->getTextoRecargo()) ?> (<?php Gral::_echo($vta_presupuesto->getPorcentajeRecargo()) ?> %)">
                REC: <?php Gral::_echoImp($vta_presupuesto->getImporteRecargo()) ?>
            </div>
        <?php }else{ ?>
            <div class="importe-descuento" title="<?php Gral::_echo($vta_presupuesto->getTextoRecargo()) ?> (<?php Gral::_echo($vta_presupuesto->getPorcentajeRecargo()) ?> %)">
                OFF: <?php Gral::_echoImp($vta_presupuesto->getImporteRecargo()) ?>
            </div>
        <?php } ?>
    <?php } ?>
    
    <div class="importe-iva" title="<?php Gral::_echo($vta_presupuesto->getPorcentaje().'%') ?>">
        IVA: <?php Gral::_echoImp($vta_presupuesto->getImporteTotalIva()) ?>
    </div>
    
    <div class="tipo-lista">
        <?php Gral::_echo($vta_presupuesto->getInsTipoListaPrecio()->getDescripcion()) ?>
    </div>
    
</td>	

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $destacado ?>'>
    <div class="importe-total">
        <?php if ($vta_presupuesto->getConflicto()) { ?>
            <img src='imgs/icn_alerta.png' width='14' border='0' title="Conflicto de Precios en Presupuesto"/>
        <?php } ?>
            
        <?php Gral::_echoImp($vta_presupuesto->getImporteTotalPresupuestoConIva(false, 0)) ?>
    </div>
    <div class="vta-descuento-financiero">
        <?php Gral::_echo($vta_presupuesto->getVtaDescuentoFinanciero()->getDescripcion()) ?>
    </div>
</td>	

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $destacado ?>'>
    <ul class="adm_botones_acciones">

        <li class='adm_botones_accion estado-presupuesto'>
            <img src='imgs/icn_save_<?php echo $vta_presupuesto->getEstado() ?>.png' width='18' border='0' title="<?php Gral::_echo(($vta_presupuesto->getEstado()) ? 'Guardado correctamente' : 'No ha sido Guardado') ?>"/>
        </li>

        <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_GESTION_ACCION_FICHA')) { ?>
            <li class='adm_botones_accion ver-ficha-vta-presupuesto'>
                <img src='imgs/btn_ficha.png' width='15' border='0' title="<?php Gral::_echo('Ficha del Presupuesto') ?>"/>
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_GESTION_ACCION_DESTACADO')) { ?>
            <li class='adm_botones_accion destacado' title='<?php Lang::_lang('Destacar/No Destacar') ?>'>
                <img src='imgs/btn_destacado_<?php Gral::_echo($vta_presupuesto->getDestacado()) ?>.png' width='20' border='0' />
            </li>
        <?php } ?>            

        <?php if ($vta_presupuesto_tipo_estado->getGestionable()) { ?>
            <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_GESTION_ACCION_RETOMAR_PRESUPUESTO') && !$presupuesto_estado_terminal) { ?>
                <li class='adm_botones_accion vta-presupuesto-retomar'>
                    <img src='imgs/btn_carrito_editar.png' width='20' border='0' title="<?php Gral::_echo('Retomar Presupuesto') ?>"/>
                </li>
            <?php } ?>
        <?php }elseif ($vta_presupuesto_tipo_estado->getActivo() && $vta_presupuesto->getPreaprobado()){ ?>
            <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_GESTION_ACCION_RETOMAR_PRESUPUESTO_PREAPROBADO')) { ?>
                <li class='adm_botones_accion vta-presupuesto-retomar'>
                    <img src='imgs/btn_carrito_editar.png' width='20' border='0' title="<?php Gral::_echo('Retomar Presupuesto Preaprobado') ?>"/>
                </li>
            <?php } ?>
        <?php }elseif ($vta_presupuesto->getVtaPresupuestoTipoEstado()->getCodigo() == VtaPresupuestoTipoEstado::TIPO_EN_PRODUCCION){ ?>
            <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_GESTION_ACCION_RETOMAR_PRESUPUESTO_EN_PRODUCCION')) { ?>
                <li class='adm_botones_accion vta-presupuesto-retomar'>
                    <img src='imgs/btn_carrito_editar.png' width='20' border='0' title="<?php Gral::_echo('Retomar Presupuesto En Produccion') ?>"/>
                </li>
            <?php } ?>
        <?php } ?>

        <?php if ($vta_presupuesto->getVtaPresupuestoTipoEstado()->getCodigo() == VtaPresupuestoTipoEstado::TIPO_VENCIDO) { ?>
            <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_GESTION_ACCION_EXTENDER_PRESUPUESTO') && !$presupuesto_estado_terminal) { ?>
                <li class='adm_botones_accion vta-presupuesto-extender-presupuesto'>
                    <img src='imgs/btn_extender.png' width='20' border='0' title="<?php Gral::_echo('Extender Presupuesto') ?>"/>
                </li>
            <?php } ?>
        <?php } ?>

        <?php if ($vta_presupuesto->getEstado()) { ?>

            <?php if ($vta_presupuesto_tipo_estado->getCodigo() != VtaPresupuestoTipoEstado::TIPO_ANULADO && $vta_presupuesto_tipo_estado->getCodigo() != VtaPresupuestoTipoEstado::TIPO_CANCELADO) { ?>
                <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_GESTION_ACCION_ENVIAR_POR_CORREO')) { ?>
                    <li class='adm_botones_accion vta-presupuesto-enviar-por-correo'>
                        <img src='imgs/btn_email.png' width='20' border='0' title="<?php Gral::_echo('Enviar Email') ?>"/>
                    </li>
                <?php } ?>
            <?php } ?>

            <?php if ($vta_presupuesto_tipo_estado->getCodigo() != VtaPresupuestoTipoEstado::TIPO_ANULADO && $vta_presupuesto_tipo_estado->getCodigo() != VtaPresupuestoTipoEstado::TIPO_CANCELADO) { ?>
                <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_GESTION_ACCION_VER_OV')) { ?>
                    <?php if ($vta_orden_venta) { ?>
                        <li class='adm_botones_accion ver-orden-venta'>
                            <a href="_init.php?arr_gral=<?php echo VtaOrdenVenta::getFiltrosArrGral() ?>&arr=<?php echo $vta_orden_venta->getFiltrosArrXCampo('VtaPresupuesto', 'vta_presupuesto_id') ?>">
                                <img src='imgs/btn_importe.png' width='12' border='0' title="<?php Gral::_echo('Ver Ordenes de Venta') ?>"/>
                            </a>
                        </li>
                    <?php } ?>
                <?php } ?>
            <?php } ?>

            <?php if ($vta_presupuesto_tipo_estado->getCodigo() != VtaPresupuestoTipoEstado::TIPO_ANULADO && $vta_presupuesto_tipo_estado->getCodigo() != VtaPresupuestoTipoEstado::TIPO_CANCELADO) { ?>
                <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_GESTION_ACCION_COMPROBANTE')) { ?>
                    <li class='adm_botones_accion vta-presupuesto-comprobante'>
                        <a href="ajax/modulos/vta_presupuesto_gestion/pdf_presupuesto.php?vta_presupuesto_id=<?php echo $vta_presupuesto->getId() ?>" target="_blank">
                            <img src='imgs/btn_pdf.png' width='22' border='0' title="<?php Gral::_echo('Ver PDF de Presupuesto') ?>"/>
                        </a>
                    </li>
                <?php } ?>
            <?php } ?>

            <?php if ($vta_presupuesto_tipo_estado->getCodigo() != VtaPresupuestoTipoEstado::TIPO_ANULADO && $vta_presupuesto_tipo_estado->getCodigo() != VtaPresupuestoTipoEstado::TIPO_CANCELADO) { ?>
                <?php if ($vta_remito) { ?>
                    <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_GESTION_ACCION_COMPROBANTE_REMITO')) { ?>
                        <li class='adm_botones_accion vta-presupuesto-comprobante'>
                            <a href="ajax/modulos/vta_remito_gestion/pdf_remito.php?vta_remito_id=<?php echo $vta_remito->getId() ?>" target="_blank">
                                <img src='imgs/btn_pdf.png' width='22' border='0' title="<?php Gral::_echo('Ver PDF de Remito') ?>"/>
                            </a>
                        </li>
                    <?php } ?>
                <?php } ?>
            <?php } ?>

            <?php if ($vta_presupuesto_tipo_estado->getCodigo() != VtaPresupuestoTipoEstado::TIPO_ANULADO && $vta_presupuesto_tipo_estado->getCodigo() != VtaPresupuestoTipoEstado::TIPO_CANCELADO) { ?>
                <?php if ($vta_factura) { ?>
                    <?php if ($vta_factura->getCae() != '') { ?>
                        <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_GESTION_ACCION_COMPROBANTE_FACTURA')) { ?>
                            <li class='adm_botones_accion vta-presupuesto-comprobante'>
                                <a href="ajax/modulos/vta_factura_gestion/pdf_factura.php?vta_factura_id=<?php echo $vta_factura->getId() ?>" target="_blank">
                                    <img src='imgs/btn_pdf.png' width='22' border='0' title="<?php Gral::_echo('Ver PDF de Factura') ?>"/>
                                </a>
                            </li>
                        <?php } ?>
                    <?php } else { ?>
                        <img src='imgs/icn_alerta.png' width='16' border='0' title="Factura NO autorizada por AFIP" />
                    <?php } ?>
                <?php } ?>                    
            <?php } ?>

        <?php } ?>

        <?php if ($vta_presupuesto_tipo_estado->getGestionable() || $vta_presupuesto_tipo_estado->getCodigo() == VtaPresupuestoTipoEstado::TIPO_VENCIDO) { ?>
            <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_GESTION_ACCION_CANCELAR_PRESUPUESTO') && !$presupuesto_estado_terminal) { ?>
                <li class='adm_botones_accion vta-presupuesto-cancelar'>
                    <img src='imgs/btn_cancelar.png' width='15' border='0' title="<?php Gral::_echo('Cancelar Presupuesto') ?>"/>
                </li>
            <?php } ?>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_PRESUPUESTO_GESTION_ACCION_CONFIG')) { ?>
            <li class='adm_botones_accion db_context' archivo='<?php Gral::_echo(Gral::getPath('path_http')) ?>admin/ajax/modulos/vta_presupuesto_gestion/db_context_acciones.php?id=<?php Gral::_echo($vta_presupuesto->getId()) ?>' modulo_metodo_init="setInitVtaPresupuestoGestion()">
                <img src='imgs/btn_ajustar.png' width='20' />       
            </li>
        <?php } ?>

    </ul>


</td>

