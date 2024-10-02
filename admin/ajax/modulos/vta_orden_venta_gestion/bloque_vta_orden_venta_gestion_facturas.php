<table border="0" class="tabla-modal">
    <tr>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang("Cod Factura"); ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang("Cod OV"); ?></td>
        <td class="adm_tbl_encabezado" width="300" align='center'><?php Lang::_lang("Descripcion"); ?></td>
        <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang("Estado"); ?></td>
        <td class="adm_tbl_encabezado" width="60" align='center'><?php Lang::_lang("Cantidad"); ?></td>
        <td class="adm_tbl_encabezado" width="60" align='center'><?php Lang::_lang("Desc %"); ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Imp Unitario"); ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Imp Total"); ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Vendedor"); ?></td>
    </tr>
    <?php
    $vta_factura_vta_orden_ventas = $vta_orden_venta->getVtaFacturaVtaOrdenVentas(null, null, true);
    $cont = 0;

    foreach ($vta_factura_vta_orden_ventas as $vta_factura_vta_orden_venta) {
        $vta_factura = $vta_factura_vta_orden_venta->getVtaFactura();
        $cont++;
        $strong = ($cont == 1) ? 'strong' : '';
        ?>
        <tr>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="codigo-vta-factura">
                    <?php Gral::_echo($vta_factura->getCodigo()); ?>
                </div>
                <div class="fecha-vta-factura">
                    <?php Gral::_echo(Gral::getFechaToWeb($vta_factura->getFechaEmision())) ?>
                </div>
            </td>

            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="codigo-vta-orden-venta">
                    <?php Gral::_echo($vta_orden_venta->getCodigo()); ?>
                </div>
                <div class="fecha-vta-orden-venta">
                    <?php Gral::_echo(Gral::getFechaToWeb($vta_orden_venta->getCreado())) ?>
                </div>
            </td>

            <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                <div class="descripcion">
                    <?php Gral::_echo($vta_orden_venta->getDescripcion()); ?>
                </div>
            </td>

            <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                <div class="vta_factura_tipo_estado_id">
                    <img src="imgs/vta_factura_tipo_estado/<?php Gral::_echo($vta_factura->getVtaFacturaTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
                    <?php Gral::_echo($vta_factura->getVtaFacturaTipoEstado()->getDescripcion()); ?>
                </div>
            </td>

            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="cantidad">
                    <?php $cantidad = $vta_orden_venta->getCantidad(); ?>
                    <?php $cantidad_en_factura = $vta_factura_vta_orden_venta->getCantidad(); ?>
                    <?php Gral::_echo($cantidad_en_factura) ?> / <?php Gral::_echo($cantidad) ?>
                </div>
                <div class="unidad-medida">
                    <?php Gral::_echo($vta_orden_venta->getInsInsumo()->getInsUnidadMedida()->getDescripcion()) ?>
                </div>  
            </td>

            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class = "descuento">
                    <?php Gral::_echo($vta_orden_venta->getDescuento()) ?>%
                </div>
            </td>

            <td class="adm_tbl_lineas <?php echo $strong ?>" align="right">
                <?php if ($vta_orden_venta->getDescuento() > 0) { ?>
                    <div class="importe-unitario bruto">
                        <?php Gral::_echoImp($vta_orden_venta->getImporteUnitario()) ?>
                    </div>
                <?php } ?>

                <div class="importe-unitario neto" title="Descuento <?php Gral::_echo($vta_orden_venta->getDescuento()) ?>%">
                    <?php $importe_unitario = $vta_orden_venta->getImporteUnitarioConDescuento() ?>
                    <?php Gral::_echoImp($importe_unitario) ?>
                </div>
            </td>

            <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <?php if ($vta_orden_venta->getDescuento() > 0) { ?>
                    <div class="importe-total bruto">
                        <?php Gral::_echoImp($vta_orden_venta->getImporteUnitario() * $cantidad_en_factura) ?>
                    </div>
                <?php } ?>

                <div class="importe-total neto">
                    <?php $importe_total = $importe_unitario * $cantidad_en_factura; ?>
                    <?php Gral::_echoImp($importe_total); ?>
                </div>
            </td>	

            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="creado-por">
                    <?php Gral::_echo($vta_factura->getVtaVendedor()->getDescripcion()) ?>
                </div>
            </td>
        </tr>
    <?php } ?>
</table>