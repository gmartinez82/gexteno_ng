<?php
$ins_insumo = $vta_orden_venta->getInsInsumo();
$vta_presupuesto_ins_insumo = $vta_orden_venta->getVtaPresupuestoInsInsumo();
$vta_presupuesto = $vta_orden_venta->getVtaPresupuesto();
$vta_presupuesto_tipo_emision = $vta_presupuesto->getVtaPresupuestoTipoEmision();
$cli_cliente = $vta_orden_venta->getCliCliente();

$vta_factura_vta_orden_ventas = $vta_orden_venta->getVtaFacturaVtaOrdenVentas(null, null, true);
$vta_ajuste_debe_vta_orden_ventas = $vta_orden_venta->getVtaAjusteDebeVtaOrdenVentas(null, null, true);
$vta_remito_vta_orden_ventas = $vta_orden_venta->getVtaRemitoVtaOrdenVentas(null, null, true);
$vta_remito_ajuste_vta_orden_ventas = $vta_orden_venta->getVtaRemitoAjusteVtaOrdenVentas(null, null, true);
?>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="codigo-vta-orden-venta">
        <?php Gral::_echo($vta_orden_venta->getCodigo()) ?>
    </div>
    <div class="fecha-vta-orden-venta">
        <?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta->getCreado(), true)) ?>
    </div>
    <div class="creado-por">
        <?php Gral::_echo($vta_orden_venta->getCreadoPorDescripcion()) ?>
    </div>
</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <?php if ($ins_insumo->getId() != 'null') { ?>
        <div class="foto avatar">
            <a href="<?php echo $ins_insumo->getPathImagenPrincipal() ?>">
                <img src="<?php echo $ins_insumo->getPathImagenPrincipal(true) ?>" width="30" alt="foto" />
            </a>
        </div>
    <?php } ?>

    <div class="descripcion">	
        <?php Gral::_echo($vta_orden_venta->getDescripcion()) ?>
    </div>
    <?php if ($ins_insumo->getId() != 'null') { ?>
        <div class="codigo-interno">	
            C.I.: <?php Gral::_echo($ins_insumo->getCodigoInterno()) ?>
        </div>    
    <?php } ?>

</td>

<td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <div class="vta_orden_venta_tipo_estado_id">	
        <img src="imgs/vta_orden_venta_tipo_estado/<?php Gral::_echo($vta_orden_venta->getVtaOrdenVentaTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="12" />
        <?php Gral::_echo($vta_orden_venta->getVtaOrdenVentaTipoEstado()->getDescripcion()) ?>
    </div>
    <div class="vta-presupuesto-tipo-emision">
        <?php Gral::_echo($vta_presupuesto_tipo_emision->getDescripcion()) ?>        
    </div>
</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>

    <?php if ($vta_orden_venta->getVtaOrdenVentaTipoEstado()->getCodigo() != VtaOrdenVentaTipoEstado::TIPO_CANCELADO) { ?>
        <div class="vta_orden_venta_tipo_estado_remision_id">	
            <img src="imgs/vta_orden_venta_tipo_estado_remision/<?php Gral::_echo($vta_orden_venta->getVtaOrdenVentaTipoEstadoRemision()->getCodigo()) ?>.png" alt="tipo-estado" width="12" />
            <?php Gral::_echo($vta_orden_venta->getVtaOrdenVentaTipoEstadoRemision()->getDescripcion()) ?>
        </div>
        <div class="cantidad_remitida">
            <?php Gral::_echoFloatDyn($vta_orden_venta->getCantidadEnRemito()) ?> / <?php Gral::_echoFloatDyn($vta_orden_venta->getCantidad()) ?>
        </div>
        <div class="unidad-medida">
            <?php Gral::_echo($vta_orden_venta->getInsInsumo()->getInsUnidadMedida()->getDescripcion()) ?>
        </div>  
    <?php } else { ?>
        -
    <?php } ?>
        
    <div class="bloque-comprobantes-vinculados">
        <?php foreach($vta_remito_vta_orden_ventas as $vta_remito_vta_orden_venta){ ?>
            <div class="bloque-comprobante-vinculado" title="<?php Gral::_echo($vta_remito_vta_orden_venta->getVtaRemito()->getVtaRemitoTipoEstado()->getDescripcion()) ?>">
                <img src="imgs/vta_remito_tipo_estado/<?php Gral::_echo($vta_remito_vta_orden_venta->getVtaRemito()->getVtaRemitoTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="8" />
                <?php echo $vta_remito_vta_orden_venta->getVtaRemito()->getCodigo() ?>
                
                <?php if (UsCredencial::getEsAcreditado('VTA_REMITO_GESTION_ACCION_COMPROBANTE')) { ?>
                    <li class='adm_botones_accion vta-remito-comprobante'>
                        <a href="ajax/modulos/vta_remito_gestion/pdf_remito.php?vta_remito_id=<?php echo $vta_remito_vta_orden_venta->getVtaRemito()->getId() ?>" target="_blank">
                            <img src='imgs/btn_pdf.png' width='12' border='0' title="Ver Remito" />
                        </a>
                    </li>
                <?php } ?>
                    
            </div>
        <?php } ?>
        <?php foreach($vta_remito_ajuste_vta_orden_ventas as $vta_remito_ajuste_vta_orden_venta){ ?>
            <div class="bloque-comprobante-vinculado" title="<?php Gral::_echo($vta_remito_ajuste_vta_orden_venta->getVtaRemitoAjuste()->getVtaRemitoAjusteTipoEstado()->getDescripcion()) ?>">
                <img src="imgs/vta_remito_ajuste_tipo_estado/<?php Gral::_echo($vta_remito_ajuste_vta_orden_venta->getVtaRemitoAjuste()->getVtaRemitoAjusteTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="8" />
                <?php echo $vta_remito_ajuste_vta_orden_venta->getVtaRemitoAjuste()->getCodigo() ?>
                
                <?php if (UsCredencial::getEsAcreditado('VTA_REMITO_AJUSTE_GESTION_ACCION_COMPROBANTE')) { ?>
                    <li class='adm_botones_accion vta-remito-ajuste-comprobante'>
                        <a href="ajax/modulos/vta_remito_ajuste_gestion/pdf_remito_ajuste.php?vta_remito_ajuste_id=<?php echo $vta_remito_ajuste_vta_orden_venta->getVtaRemitoAjuste()->getId() ?>" target="_blank">
                            <img src='imgs/btn_pdf.png' width='12' border='0' title="Ver Remito Ajuste" />
                        </a>
                    </li>
                <?php } ?>
                
            </div>
        <?php } ?>
    </div>

</td>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>

    <?php if ($vta_orden_venta->getVtaOrdenVentaTipoEstado()->getCodigo() != VtaOrdenVentaTipoEstado::TIPO_CANCELADO) { ?>
        <div class="vta_orden_venta_tipo_estado_facturacion_id">	
            <img src="imgs/vta_orden_venta_tipo_estado_facturacion/<?php Gral::_echo($vta_orden_venta->getVtaOrdenVentaTipoEstadoFacturacion()->getCodigo()) ?>.png" alt="tipo-estado" width="12" />
            <?php Gral::_echo($vta_orden_venta->getVtaOrdenVentaTipoEstadoFacturacion()->getDescripcion()) ?>
        </div>
        <div class="cantidad_facturada">
            <?php Gral::_echoFloatDyn($vta_orden_venta->getCantidadEnFactura()) ?> / <?php Gral::_echoFloatDyn($vta_orden_venta->getCantidad()) ?>
        </div>
        <div class="unidad-medida">
            <?php Gral::_echo($vta_orden_venta->getInsInsumo()->getInsUnidadMedida()->getDescripcion()) ?>
        </div>  
    <?php } else { ?>
        -
    <?php } ?>

    <div class="bloque-comprobantes-vinculados">
        <?php foreach($vta_factura_vta_orden_ventas as $vta_factura_vta_orden_venta){ ?>
            <div class="bloque-comprobante-vinculado" title="<?php Gral::_echo($vta_factura_vta_orden_venta->getVtaFactura()->getVtaFacturaTipoEstado()->getDescripcion()) ?>">
                <img src="imgs/vta_factura_tipo_estado/<?php Gral::_echo($vta_factura_vta_orden_venta->getVtaFactura()->getVtaFacturaTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="8" />
                <?php echo $vta_factura_vta_orden_venta->getVtaFactura()->getNumeroComprobanteCompleto() ?>
                
                <?php if (UsCredencial::getEsAcreditado('VTA_FACTURA_GESTION_ACCION_COMPROBANTE')) { ?>
                    <?php if ($vta_factura_vta_orden_venta->getVtaFactura()->getCae() != '') { ?>
                    <li class='adm_botones_accion vta-factura-comprobante'>
                        <a href="ajax/modulos/vta_factura_gestion/pdf_factura.php?vta_factura_id=<?php echo $vta_factura_vta_orden_venta->getVtaFactura()->getId() ?>" target="_blank">
                            <img src='imgs/btn_pdf.png' width='12' border='0' title="Ver Factura" />
                        </a>
                    </li>
                    <?php } ?>
                <?php } ?>
                    
            </div>
        <?php } ?>
        <?php foreach($vta_ajuste_debe_vta_orden_ventas as $vta_ajuste_debe_vta_orden_venta){ ?>
            <div class="bloque-comprobante-vinculado" title="<?php Gral::_echo($vta_ajuste_debe_vta_orden_venta->getVtaAjusteDebe()->getVtaAjusteDebeTipoEstado()->getDescripcion()) ?>">
                <img src="imgs/vta_ajuste_debe_tipo_estado/<?php Gral::_echo($vta_ajuste_debe_vta_orden_venta->getVtaAjusteDebe()->getVtaAjusteDebeTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="8" />
                <?php echo $vta_ajuste_debe_vta_orden_venta->getVtaAjusteDebe()->getNumeroComprobanteCompleto() ?>
                
                <?php if (UsCredencial::getEsAcreditado('VTA_FACTURA_GESTION_ACCION_COMPROBANTE')) { ?>
                    <li class='adm_botones_accion vta-ajuste_debe-comprobante'>
                        <a href="ajax/modulos/vta_ajuste_debe_gestion/pdf_ajuste_debe.php?vta_ajuste_debe_id=<?php echo $vta_ajuste_debe_vta_orden_venta->getVtaAjusteDebe()->getId() ?>" target="_blank">
                            <img src='imgs/btn_pdf.png' width='12' border='0' title="Ver Ajuste Debe" />
                        </a>
                    </li>
                <?php } ?>
                    
            </div>
        <?php } ?>
    </div>

        
</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <?php if ($vta_orden_venta->getDescuento() > 0) { ?>
        <div class="importe-unitario bruto">
            <?php Gral::_echoImp($vta_orden_venta->getImporteUnitario()) ?>
        </div>
    <?php } ?>

    <div class="importe-unitario neto" title="Descuento <?php Gral::_echo($vta_orden_venta->getDescuento()) ?>%">
        <?php $importe_unitario = $vta_orden_venta->getImporteUnitarioConDescuento() ?>
        <?php Gral::_echoImp($importe_unitario) ?>
    </div>

    <div class="gral_tipo_iva">
        <?php Gral::_echo($vta_orden_venta->getGralTipoIva()->getDescripcion()) ?>
    </div>

</td>

<td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
    <?php if ($vta_orden_venta->getDescuento() > 0) { ?>
        <div class="importe-subtotal bruto">
            <?php Gral::_echoImp($vta_orden_venta->getImporteUnitario() * $vta_orden_venta->getCantidad()) ?>
        </div>
    <?php } ?>

    <div class="importe-subtotal neto">
        <?php Gral::_echoImp($vta_orden_venta->getImporteSubtotal()); ?>
    </div>

    <div class="importe-total">
        <?php Gral::_echoImp($vta_orden_venta->getImporteTotal()); ?>
        <div class="label-iva-incluido">IVA Inc</div>
    </div>

</td>	
<?php //Gral::_echo($vta_orden_venta->getGralTipoIva()->getDescripcion())  ?>

<td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>

    <ul class="adm_botones_acciones" vta_orden_venta_id="<?php echo $vta_orden_venta->getId() ?>">
        <?php if (UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_GESTION_ACCION_VER_FICHA')) { ?>
            <li class='adm_botones_accion vta_orden_venta_gestion_ver_ficha'>
                <img src='imgs/btn_ficha.png' width='16' border='0' title="Ver Remitos" />
            </li>
        <?php } ?>

        <?php if (UsCredencial::getEsAcreditado('VTA_ORDEN_VENTA_GESTION_ACCION_SET_ESTADO')) { ?>
            <?php if ($vta_orden_venta->getVtaOrdenVentaTipoEstado()->getCodigo() != VtaOrdenVentaTipoEstado::TIPO_CANCELADO) { ?>
                <li class='adm_botones_accion vta_orden_venta_gestion_set_estado'>
                    <img src='imgs/tilde_1.png' width='20' border='0' title="Cambiar estado de la OV"/>
                </li>
            <?php } ?>
        <?php } ?>
    </ul>

</td>	

