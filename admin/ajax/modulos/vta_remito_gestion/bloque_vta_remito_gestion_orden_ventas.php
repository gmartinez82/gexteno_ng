<table border="0" class="tabla-modal">
    <tr>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Cod OV"); ?></td>
        <td class="adm_tbl_encabezado" width="60" align='center'><?php Lang::_lang("Foto"); ?></td>
        <td class="adm_tbl_encabezado" width="300" align='center'><?php Lang::_lang("Insumo"); ?></td>
        <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang("Estado"); ?></td>
        <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang("Estado REMS"); ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Cantidad"); ?></td>
        <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang("Estado FACT"); ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Imp Unitario"); ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Imp Total"); ?></td>
    </tr>
    <?php
    $vta_remito_vta_orden_ventas = $vta_remito->getVtaRemitoVtaOrdenVentas();
    $cont = 0;
    foreach ($vta_remito_vta_orden_ventas as $vta_remito_vta_orden_venta) {
        $cont++;
        $strong = ($cont == 1) ? 'strong' : '';
        $ins_insumo = $vta_remito_vta_orden_venta->getInsInsumo();
        $vta_orden_venta = $vta_remito_vta_orden_venta->getVtaOrdenVenta();
        $vta_presupuesto = $vta_orden_venta->getVtaPresupuesto();
        $cli_cliente = $vta_presupuesto->getCliCliente();
        ?>
        <tr>
            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="codigo-vta-presupuesto">
                    <?php Gral::_echo($vta_presupuesto->getCodigo()) ?>
                </div>
                <div class="codigo-vta-orden-venta">
                    <?php Gral::_echo($vta_orden_venta->getCodigo()) ?>
                </div>
                <div class="fecha-vta-orden-venta">
                    <?php Gral::_echo(Gral::getFechaToWeb($vta_orden_venta->getCreado())) ?>
                </div>
            </td>

            <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="avatar">
                    <a href="<?php Gral::_echo($vta_orden_venta->getInsInsumo()->getPathImagenPrincipal()) ?>">
                        <img src="<?php Gral::_echo($vta_orden_venta->getInsInsumo()->getPathImagenPrincipal(true)) ?>" alt="foto" width="50" />
                    </a>
                </div>
            </td>	

            <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="descripcion">	
                    <?php Gral::_echo($vta_orden_venta->getDescripcion()) ?>
                </div>
                <div class="codigo-interno">
                    CI: <?php Gral::_echo($vta_orden_venta->getInsInsumo()->getCodigoInterno()) ?>
                </div>
                <div class="marca">
                    <?php Gral::_echo($vta_orden_venta->getInsInsumo()->getInsMarca()->getDescripcion()) ?>: <?php Gral::_echo($vta_orden_venta->getInsInsumo()->getCodigoMarca()) ?>
                </div>                
            </td>

            <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="vta_orden_venta_tipo_estado_id">	
                    <img src="imgs/vta_orden_venta_tipo_estado/<?php Gral::_echo($vta_orden_venta->getVtaOrdenVentaTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
                    <?php Gral::_echo($vta_orden_venta->getVtaOrdenVentaTipoEstado()->getDescripcion()) ?>
                </div>
            </td>

            <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="vta_orden_venta_tipo_estado_remision_id">	
                    <img src="imgs/vta_orden_venta_tipo_estado_remision/<?php Gral::_echo($vta_orden_venta->getVtaOrdenVentaTipoEstadoRemision()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
                    <?php Gral::_echo($vta_orden_venta->getVtaOrdenVentaTipoEstadoRemision()->getDescripcion()) ?>
                </div>
            </td>

            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="cantidad">
                    <?php $cantidad = $vta_orden_venta->getCantidad(); ?>
                    <?php $cantidad_en_remito = $vta_orden_venta->getCantidadEnRemito(); ?>
                    <?php Gral::_echo($cantidad_en_remito) ?> / <?php Gral::_echo($cantidad) ?>
                </div>
                <div class="unidad-medida">
                    <?php Gral::_echo($vta_orden_venta->getInsInsumo()->getInsUnidadMedida()->getDescripcion()) ?>
                </div>  
            </td>

            <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="vta_orden_venta_tipo_estado_facturacion_id">	
                    <img src="imgs/vta_orden_venta_tipo_estado_facturacion/<?php Gral::_echo($vta_orden_venta->getVtaOrdenVentaTipoEstadoFacturacion()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
                    <?php Gral::_echo($vta_orden_venta->getVtaOrdenVentaTipoEstadoFacturacion()->getDescripcion()) ?>
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
            </td>

            <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <?php if ($vta_orden_venta->getDescuento() > 0) { ?>
                    <div class="importe-total bruto">
                        <?php Gral::_echoImp($vta_orden_venta->getImporteUnitario() * $vta_orden_venta->getCantidad()) ?>
                    </div>
                <?php } ?>

                <div class="importe-total neto">
                    <?php $importe_total = $importe_unitario * $vta_orden_venta->getCantidad(); ?>
                    <?php Gral::_echoImp($importe_total); ?>
                </div>
            </td>
        </tr>
    <?php } ?>
</table>