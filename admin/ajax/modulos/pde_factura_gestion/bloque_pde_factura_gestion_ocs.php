<table border="0" class="tabla-modal">
    <tr>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Codigo"); ?></td>
        <td class="adm_tbl_encabezado" width="350" align='center'><?php Lang::_lang("Insumo"); ?></td>
        <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang("Estado RCP"); ?></td>
        <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang("Estado FACT"); ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Cant Facturada"); ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Imp Unitario"); ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'>% <?php Lang::_lang("Desc"); ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang("Imp Total"); ?></td>
    </tr>
    <?php
    $cont = 0;
    foreach ($pde_factura_pde_ocs as $pde_factura_pde_oc) {
        $cont++;
        $strong = ($cont == 1) ? 'strong' : '';
        $pde_oc = $pde_factura_pde_oc->getPdeOc();
        $ins_insumo = $pde_factura_pde_oc->getInsInsumo();
        $pde_pedido = $pde_oc->getPdePedido();
        $prv_proveedor = $pde_oc->getPrvProveedor();
        ?>
        <tr>
            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="codigo-pde-pedido">
                    <?php Gral::_echo($pde_pedido->getCodigo()) ?>
                </div>
                <div class="fecha-pde-pedido">
                    <?php Gral::_echo(Gral::getFechaToWeb($pde_pedido->getCreado())) ?>
                </div>

                <hr>

                <div class="codigo-pde-orden-compra">
                    <?php Gral::_echo($pde_oc->getCodigo()) ?>
                </div>
                <div class="fecha-pde-orden-compra">
                    <?php Gral::_echo(Gral::getFechaToWeb($pde_oc->getCreado())) ?>
                </div>

                <div class="pde_oc_tipo_estado_id">	
                    <img src="imgs/pde_oc_estado/<?php Gral::_echo($pde_oc->getPdeOcTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="12" />
                    <?php Gral::_echo($pde_oc->getPdeOcTipoEstado()->getDescripcion()) ?>
                </div>
            </td>

            <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="descripcion">	
                    <?php Gral::_echo($ins_insumo->getDescripcion()) ?>
                </div>
                <div class="codigo-interno">
                    CI: <?php Gral::_echo($ins_insumo->getCodigoInterno()) ?>
                </div>
                <div class="marca">
                    <?php Gral::_echo($ins_insumo->getInsMarca()->getDescripcion()) ?>: <?php Gral::_echo($ins_insumo->getCodigoMarca()) ?>
                </div>

            </td>

            <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="pde_oc_tipo_estado_remision_id">	
                    <img src="imgs/pde_oc_tipo_estado_recepcion/<?php Gral::_echo($pde_oc->getPdeOcTipoEstadoRecepcion()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
                    <?php Gral::_echo($pde_oc->getPdeOcTipoEstadoRecepcion()->getDescripcion()) ?>
                </div>
                <div class="cantidad">
                    <?php $cantidad = $pde_oc->getCantidad(); ?>
                    <?php $cantidad_recibida = $pde_oc->getCantidadTotalRecibida(); ?>
                    <?php Gral::_echo($cantidad_recibida) ?> / <?php Gral::_echo($cantidad) ?>
                </div>
                <div class="unidad-medida">
                    <?php Gral::_echo($ins_insumo->getInsUnidadMedida()->getDescripcion()) ?>
                </div>  
            </td>

            <td align='left' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="pde_oc_tipo_estado_facturacion_id">	
                    <img src="imgs/pde_oc_tipo_estado_facturacion/<?php Gral::_echo($pde_oc->getPdeOcTipoEstadoFacturacion()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
                    <?php Gral::_echo($pde_oc->getPdeOcTipoEstadoFacturacion()->getDescripcion()) ?>
                </div>
                <div class="cantidad">
                    <?php $cantidad = $pde_oc->getCantidad(); ?>
                    <?php $cantidad_facturada = $pde_oc->getCantidadTotalFacturada(); ?>
                    <?php Gral::_echo($cantidad_facturada) ?> / <?php Gral::_echo($cantidad) ?>
                </div>
                <div class="unidad-medida">
                    <?php Gral::_echo($ins_insumo->getInsUnidadMedida()->getDescripcion()) ?>
                </div>  
            </td>
            
            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <div class="cantidad">	
                    <?php Gral::_echo($pde_factura_pde_oc->getCantidad()) ?>
                </div>
            </td>

            <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <?php if ($pde_factura_pde_oc->getPorcentajeDescuento() > 0) { ?>
                    <div class="importe-unitario bruto">
                        <?php Gral::_echoImp($pde_factura_pde_oc->getImporteUnitario()) ?>
                    </div>
                <?php } ?>

                <div class="importe-unitario neto" title="Descuento <?php Gral::_echo($pde_factura_pde_oc->getPorcentajeDescuento()) ?> %">
                    <?php $importe_unitario = $pde_factura_pde_oc->getImporteUnitarioConDescuento() ?>
                    <?php Gral::_echoImp($importe_unitario) ?>
                </div>
            </td>

            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <?php if ($pde_factura_pde_oc->getPorcentajeDescuento() > 0) { ?>
                    <div class="porcentaje-descuento">
                        <?php Gral::_echo($pde_factura_pde_oc->getPorcentajeDescuento()) ?> %
                    </div>
                <?php } ?>

            </td>

            <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <?php if ($pde_factura_pde_oc->getPorcentajeDescuento() > 0) { ?>
                    <div class="importe-total bruto">
                        <?php Gral::_echoImp($pde_factura_pde_oc->getImporteUnitario() * $pde_factura_pde_oc->getCantidad()) ?>
                    </div>
                <?php } ?>

                <div class="importe-total neto">
                    <?php $importe_total = $importe_unitario * $pde_factura_pde_oc->getCantidad(); ?>
                    <?php Gral::_echoImp($importe_total); ?>
                </div>
            </td>
        </tr>
    <?php } ?>
</table>