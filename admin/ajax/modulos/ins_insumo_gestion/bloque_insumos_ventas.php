<table border="0" class="tabla-modal" id="tbl_insumo_gestion_ficha_ventas">
    <tr>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('Fecha') ?></td>
        <td class="adm_tbl_encabezado" width="300" align='center'><?php Lang::_lang('Cliente') ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('Costo') ?></td>
        <td class="adm_tbl_encabezado" width="60" align='center'><?php Lang::_lang('Cant') ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('Imp Unitario') ?></td>
        <td class="adm_tbl_encabezado" width="70" align='center'><?php Lang::_lang('Desc') ?></td>
        <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang('Estado RMS') ?></td>
        <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang('Estado FACT') ?></td>
    </tr>
    <?php
    $cont = 0;
    foreach ($vta_orden_ventas_ultimos as $vta_orden_venta_ultimo) {
        $cont++;
        $strong = ($cont == 1) ? 'strong' : '';
        ?>
        <tr class="uno" vta_orden_venta_id="<?php Gral::_echo($vta_orden_venta_ultimo->getId()) ?>">
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="creado">
                    <?php Gral::_echo(Gral::getFechaHoraToWEB($vta_orden_venta_ultimo->getCreado())) ?>
                </div>
                <div class="codigo">
                    <?php Gral::_echo($vta_orden_venta_ultimo->getCodigo()) ?>
                </div>
                <div class="creado-por">
                    <?php Gral::_echo($vta_orden_venta_ultimo->getCreadoPorDescripcion()) ?>
                </div>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                <div class="descripcion">
                    <?php Gral::_echo($vta_orden_venta_ultimo->getPersonaDescripcion()) ?>
                </div>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="right">
                <div class="importe_costo">
                    <?php Gral::_echoImp($vta_orden_venta_ultimo->getImporteCosto()) ?>
                </div>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="cantidad">
                    <?php Gral::_echo($vta_orden_venta_ultimo->getCantidad()) ?>
                </div>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="right">
                
                <?php if ($vta_orden_venta_ultimo->getDescuento() > 0) { ?>
                <div class="importe_unitario tachado">
                    <?php Gral::_echoImp($vta_orden_venta_ultimo->getImporteUnitario()) ?>
                </div>
                <?php } ?>
                
                <div class="importe_unitario">
                    <?php Gral::_echoImp($vta_orden_venta_ultimo->getImporteUnitarioConDescuento()) ?>
                </div>
                <div class="ins-tipo-lista-precio">
                    <?php Gral::_echo($vta_orden_venta_ultimo->getInsTipoListaPrecio()->getDescripcion()) ?>
                </div>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <?php if ($vta_orden_venta_ultimo->getDescuento() > 0) { ?>
                <div class="descuento">
                    <?php Gral::_echoFloat($vta_orden_venta_ultimo->getDescuento()) ?> %
                </div>
                <?php } ?>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                <div class="vta_orden_venta_tipo_estado_remision">
                    <img src="imgs/vta_orden_venta_tipo_estado_remision/<?php Gral::_echo($vta_orden_venta_ultimo->getVtaOrdenVentaTipoEstadoRemision()->getCodigo()) ?>.png" alt="tipo-estado" width="10" />
                    <?php Gral::_echo($vta_orden_venta_ultimo->getVtaOrdenVentaTipoEstadoRemision()->getDescripcion()) ?>
                </div>
                <div class="cantidad-remitida">
                    <?php Gral::_echo($vta_orden_venta_ultimo->getCantidadEnRemito()) ?> / <?php Gral::_echo($vta_orden_venta_ultimo->getCantidad()) ?>
                </div>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                <div class="vta_orden_venta_tipo_estado_facturacion">	
                    <img src="imgs/vta_orden_venta_tipo_estado_facturacion/<?php Gral::_echo($vta_orden_venta_ultimo->getVtaOrdenVentaTipoEstadoFacturacion()->getCodigo()) ?>.png" alt="tipo-estado" width="10" />
                    <?php Gral::_echo($vta_orden_venta_ultimo->getVtaOrdenVentaTipoEstadoFacturacion()->getDescripcion()) ?>
                </div>
                <div class="cantidad-facturada">
                    <?php Gral::_echo($vta_orden_venta_ultimo->getCantidadEnFactura()) ?> / <?php Gral::_echo($vta_orden_venta_ultimo->getCantidad()) ?>
                </div>
            </td>

        </tr>
    <?php } ?>
</table>