<table border="0" class="tabla-modal-tab-cancelado">
    <tr>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang("Fecha"); ?></td>
        <td class="adm_tbl_encabezado" width="300" align='center'><?php Lang::_lang("Observacion"); ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang("Codigo"); ?></td>
        <td class="adm_tbl_encabezado" width="300" align='center'><?php Lang::_lang("Insumo"); ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Marca"); ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Cod. Marca"); ?></td>
        <td class="adm_tbl_encabezado" width="60" align='center'><?php Lang::_lang("Cant"); ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Desc %"); ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Imp. Unitario"); ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Imp. Total"); ?></td>
    </tr>
    <?php
    $vta_presupuesto_ins_insumos = $vta_presupuesto->getVtaPresupuestoInsInsumos();
    $cont = 0;
    foreach ($vta_presupuesto_ins_insumos as $vta_presupuesto_ins_insumo) {

        $vta_presupuesto_cancelacions = $vta_presupuesto_ins_insumo->getVtaPresupuestoCancelacions();

        foreach ($vta_presupuesto_cancelacions as $vta_presupuesto_cancelacion) {


            $cont++;
            $strong = ($cont == 1) ? 'strong' : '';
            ?>
            <tr>
                <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                    <div class="creado">
                        <?php Gral::_echo(Gral::getFechaHoraToWEB($vta_presupuesto_cancelacion->getCreado())); ?>
                    </div>
                </td>

                <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                    <div class="observacion">
                        <?php Gral::_echo($vta_presupuesto_cancelacion->getObservacion()); ?>
                    </div>
                </td>

                <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                    <div class="codigo-interno">
                        <?php Gral::_echo($vta_presupuesto_ins_insumo->getInsInsumo()->getCodigoInterno()); ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                    <div class="vta-presupuesto-ins-insumo-marca-descripcion">
                        <?php Gral::_echo($vta_presupuesto_ins_insumo->getDescripcion()); ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                    <div class="ins-insumo-descripcion">
                        <?php Gral::_echo($vta_presupuesto_ins_insumo->getInsInsumo()->getInsMarca()->getDescripcion()); ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                    <div class="codigo-marca">
                        <?php Gral::_echo($vta_presupuesto_ins_insumo->getInsInsumo()->getCodigoMarca()); ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                    <div class="cantidad">
                        <?php Gral::_echo($vta_presupuesto_ins_insumo->getCantidad()); ?>
                    </div>
                    <div class="unidad-medida">
                        <?php Gral::_echo($vta_presupuesto_ins_insumo->getInsInsumo()->getInsUnidadMedida()->getDescripcion()); ?>
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
            </tr>
        <?php } ?>
    <?php } ?>
</table>
