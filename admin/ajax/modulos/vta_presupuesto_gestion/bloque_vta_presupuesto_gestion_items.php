<table border="0" class="tabla-modal-tab-items">
    <tr>
        <td class="adm_tbl_encabezado" width="60" align='center'><?php Lang::_lang("Cant"); ?></td>
        <td class="adm_tbl_encabezado" width="500" align='center'><?php Lang::_lang("Insumo"); ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Marca"); ?></td>
        <td class="adm_tbl_encabezado" width="60" align='center'><?php Lang::_lang("Desc"); ?> %</td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang("Imp Unit"); ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang("Imp Total"); ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang("Orden Venta"); ?></td>
    </tr>
    
    <?php
    $vta_presupuesto_ins_insumos = $vta_presupuesto->getVtaPresupuestoInsInsumos(null, null, true);
    $cont = 0;
    foreach ($vta_presupuesto_ins_insumos as $vta_presupuesto_ins_insumo) {
        $cont++;
        $strong = ($cont == 1) ? 'strong' : '';
        
        $ins_insumo = $vta_presupuesto_ins_insumo->getInsInsumo();
        $vta_orden_venta = $vta_presupuesto_ins_insumo->getVtaOrdenVenta();
        ?>
        <tr>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="cantidad">
                    <?php Gral::_echo($vta_presupuesto_ins_insumo->getCantidad()); ?>
                </div>
                <div class="unidad">
                    <?php Gral::_echo($ins_insumo->getInsUnidadMedida()->getDescripcion()); ?>
                </div>
            </td>
            
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                <div class="descripcion">
                    <?php Gral::_echo($vta_presupuesto_ins_insumo->getDescripcion()); ?>
                </div>
                <div class="codigo-interno">
                    C.I.: <?php Gral::_echo($ins_insumo->getCodigoInterno()); ?>
                </div>

                <div class="creado">
                    Creado el <strong><?php Gral::_echo(Gral::getFechaHoraToWEB($vta_presupuesto_ins_insumo->getCreado(), true)) ?></strong> por <?php Gral::_echo($vta_presupuesto_ins_insumo->getCreadoPorDescripcion());?>
                </div>
                <div class="modificado">
                    Modificado el <strong><?php Gral::_echo(Gral::getFechaHoraToWEB($vta_presupuesto_ins_insumo->getModificado(), true)) ?></strong> por <?php Gral::_echo($vta_presupuesto_ins_insumo->getModificadoPorDescripcion());?>
                    <?php Gral::_echo($vta_presupuesto_ins_insumo->getModificadoPorDescripcion()); ?>
                </div>
                
            </td>
            
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="ins-marca-descripcion">
                    <?php Gral::_echo($ins_insumo->getInsMarca()->getDescripcion()); ?>
                </div>
                <div class="codigo-marca">
                    <?php Gral::_echo($ins_insumo->getCodigoMarca()); ?>
                </div>
            </td>
            
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="descuento">
                    <?php Gral::_echo($vta_presupuesto_ins_insumo->getDescuento()); ?>%
                </div>
            </td>

            <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <?php if ($vta_presupuesto_ins_insumo->getDescuento() > 0) { ?>
                    <div class="importe-unitario bruto">
                        <?php Gral::_echoImp($vta_presupuesto_ins_insumo->getImporteUnitario()) ?>
                    </div>
                <?php } ?>

                <div class="importe-unitario neto">
                    <?php $importe_unitario = $vta_presupuesto_ins_insumo->getImporteUnitarioConDescuento() ?>
                    <?php Gral::_echoImp($importe_unitario) ?>
                </div>
            </td>

            <td align='right' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <?php if ($vta_presupuesto_ins_insumo->getDescuento() > 0) { ?>
                    <div class="importe-total bruto">
                        <?php Gral::_echoImp($vta_presupuesto_ins_insumo->getImporteUnitario() * $vta_presupuesto_ins_insumo->getCantidad()) ?>
                    </div>
                <?php } ?>

                <div class="importe-total neto">
                    <?php $importe_total = $importe_unitario * $vta_presupuesto_ins_insumo->getCantidad(); ?>
                    <?php Gral::_echoImp($importe_total); ?>
                </div>
            </td>
            
            <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                <?php if ($vta_orden_venta) { ?>
                    <div class="vta-orden-venta-codigo">
                        <?php Gral::_echo($vta_orden_venta->getCodigo()) ?>
                    </div>
                    <div class="vta-orden-venta-creado">
                        <?php Gral::_echo(Gral::getFechaHoraToWeb($vta_orden_venta->getCreado(), true)) ?>
                    </div>
                <?php } ?>
            </td>
            
        </tr>
    <?php } ?>
</table>