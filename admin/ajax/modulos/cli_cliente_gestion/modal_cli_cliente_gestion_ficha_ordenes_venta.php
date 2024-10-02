<div class="titulo"><?php Lang::_lang('Ultimas Ordenes de Venta del Cliente') ?></div>

<table border="0" class="tabla-modal">
    <tr>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Codigo"); ?></td>
        <td class="adm_tbl_encabezado" width="400" align='center'><?php Lang::_lang("Insumo"); ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang("Estado"); ?></td>
        <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang("Estado RMS"); ?></td>
        <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang("Estado FACT"); ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Imp Unitario"); ?></td>
        <td class="adm_tbl_encabezado" width="60" align='center'><?php Lang::_lang("Tipo IVA"); ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang("Imp Total"); ?></td>
    </tr>
    <?php
    $cont = 0;
    foreach ($vta_orden_ventas as $vta_orden_venta) {
        $cont++;
        $strong = ($cont == 1) ? 'strong' : '';
        $ins_insumo = $vta_orden_venta->getInsInsumo();
        $vta_presupuesto = $vta_orden_venta->getVtaPresupuesto();
        $cli_cliente = $vta_presupuesto->getCliCliente();
        $gral_tipo_iva = $vta_orden_venta->getGralTipoIva();
        
        $importe_unitario = $vta_orden_venta->getImporteUnitarioConDescuento(); // diferencia de decimales con la siguiente linea

        $email = '';
        if ($cli_cliente) {
            $email = $cli_cliente->getEmail();
        }
        ?>
        <tr>
            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="codigo-vta-presupuesto">
                    <?php Gral::_echo($vta_presupuesto->getCodigo()) ?>
                </div>
                <div class="fecha-vta-presupuesto">
                    <?php Gral::_echo(Gral::getFechaToWeb($vta_presupuesto->getFecha())) ?>
                </div>

                <hr>

                <div class="codigo-vta-orden-venta">
                    <?php Gral::_echo($vta_orden_venta->getCodigo()) ?>
                </div>
                <div class="fecha-vta-orden-venta">
                    <?php Gral::_echo(Gral::getFechaToWeb($vta_orden_venta->getCreado())) ?>
                </div>                
            </td>

            <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="descripcion">
                    <?php Gral::_echoFloatDyn($vta_orden_venta->getCantidad()) ?> 
                    <?php Gral::_echo($vta_orden_venta->getDescripcion()) ?>
                </div>
                <div class="codigo-interno">	
                    C.I.: <?php Gral::_echo($ins_insumo->getCodigoInterno()) ?>
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
                
                <div class="cantidad">
                    <?php Gral::_echoFloatDyn($vta_orden_venta->getCantidadEnRemito()) ?> / <?php Gral::_echoFloatDyn($vta_orden_venta->getCantidad()) ?>
                </div>
            </td>

            <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="vta_orden_venta_tipo_estado_facturacion_id">	
                    <img src="imgs/vta_orden_venta_tipo_estado_facturacion/<?php Gral::_echo($vta_orden_venta->getVtaOrdenVentaTipoEstadoFacturacion()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
                    <?php Gral::_echo($vta_orden_venta->getVtaOrdenVentaTipoEstadoFacturacion()->getDescripcion()) ?>
                </div>
                
                <div class="cantidad">
                    <?php Gral::_echoFloatDyn($vta_orden_venta->getCantidadEnFactura()) ?> / <?php Gral::_echoFloatDyn($vta_orden_venta->getCantidad()) ?>
                </div>
            </td>

            <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                
                <?php if ($vta_orden_venta->getDescuento() > 0) { ?>
                    <div class="importe-unitario bruto">
                        <?php Gral::_echoImp($vta_orden_venta->getImporteUnitario()) ?>
                    </div>
                <?php } ?>

                <div class="importe-unitario neto" title="Descuento <?php Gral::_echo($vta_orden_venta->getDescuento()) ?>%">
                    <?php Gral::_echoImp($importe_unitario) ?>
                </div>
                
                <div class="ins_tipo_lista_precio_id">	
                    <?php Gral::_echo($vta_orden_venta->getInsTipoListaPrecio()->getDescripcionCorta()) ?>
                </div>

            </td>

            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>

                <div class="gral-tipo-iva">
                    <?php Gral::_echo($gral_tipo_iva->getDescripcion()) ?> 
                    <br /><?php Gral::_echoImp(($gral_tipo_iva->getValorIva() / 100) * $importe_unitario) ?>
                    <br /><?php //Gral::_echoImp(($gral_tipo_iva->getValorIva() / 100) * $importe_unitario * $cantidad) ?>

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