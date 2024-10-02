<table border="0" class="tabla-modal">
    <tr>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang("Cod Remito Ajuste"); ?></td>
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
    $vta_remito_ajuste_vta_orden_ventas = $vta_orden_venta->getVtaRemitoAjusteVtaOrdenVentas(null, null, true);
    $cont = 0;

    foreach ($vta_remito_ajuste_vta_orden_ventas as $vta_remito_ajuste_vta_orden_venta) {
        $vta_remito_ajuste = $vta_remito_ajuste_vta_orden_venta->getVtaRemitoAjuste();
        $cont++;
        $strong = ($cont == 1) ? 'strong' : '';
        ?>
        <tr>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="codigo-vta-remito">
                    <?php Gral::_echo($vta_remito_ajuste->getCodigo()); ?>
                </div>
                <div class="fecha-vta-remito">
                    <?php Gral::_echo(Gral::getFechaToWeb($vta_remito_ajuste->getFecha())) ?>
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
                <div class="vta_remito_ajuste_tipo_estado_id">
                    <img src="imgs/vta_remito_ajuste_tipo_estado/<?php Gral::_echo($vta_remito_ajuste->getVtaRemitoAjusteTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
                    <?php Gral::_echo($vta_remito_ajuste->getVtaRemitoAjusteTipoEstado()->getDescripcion()); ?>
                </div>
            </td>

            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="cantidad">
                    <?php $cantidad = $vta_orden_venta->getCantidad(); ?>
                    <?php $cantidad_en_remito = $vta_remito_ajuste_vta_orden_venta->getCantidad(); ?>
                    <?php Gral::_echo($cantidad_en_remito) ?> / <?php Gral::_echo($cantidad) ?>
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
                        <?php Gral::_echoImp($vta_orden_venta->getImporteUnitario() * $cantidad_en_remito) ?>
                    </div>
                <?php } ?>

                <div class="importe-total neto">
                    <?php $importe_total = $importe_unitario * $cantidad_en_remito; ?>
                    <?php Gral::_echoImp($importe_total); ?>
                </div>
            </td>	

            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="creado-por">
                    <?php Gral::_echo($vta_remito_ajuste->getVtaVendedor()->getDescripcion()) ?>
                </div>
            </td>
        </tr>
    <?php } ?>
</table>