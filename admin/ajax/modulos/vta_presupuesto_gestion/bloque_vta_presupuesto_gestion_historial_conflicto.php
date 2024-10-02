<table border="0" class="tabla-modal-ficha-conflictos">
    <tr>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Cod"); ?></td>
        <td class="adm_tbl_encabezado" width="300" align='center'><?php Lang::_lang("Insumo"); ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang("Imp Inicial"); ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang("Imp Actualizado"); ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang("Imp Resuelto"); ?></td>
        <td class="adm_tbl_encabezado" width="250" align='center'><?php Lang::_lang("Observacion"); ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Estado"); ?></td>
    </tr>
    <?php
    $vta_presupuesto_ins_insumos = $vta_presupuesto->getVtaPresupuestoInsInsumos(null, null, true);

    $cont = 0;

    foreach ($vta_presupuesto_ins_insumos as $vta_presupuesto_ins_insumo) {
        $vta_presupuesto_conflictos = $vta_presupuesto_ins_insumo->getVtaPresupuestoConflictos();
        foreach ($vta_presupuesto_conflictos as $vta_presupuesto_conflicto) {
            $cont++;
            $strong = ($cont == 1) ? 'strong' : '';
            $vta_presupuesto_ins_insumo = $vta_presupuesto_conflicto->getVtaPresupuestoInsInsumo();
            ?>
            <tr>
                <td align='center' class='adm_tbl_lineas <?php echo $estado ?> <?php echo $publicado ?>'>
                    <div class="codigo-presupuesto-conflicto">
                        <?php Gral::_echo($vta_presupuesto_conflicto->getCodigo()) ?>
                    </div>
                    <div class="fecha-presupuesto-conflicto">
                        <?php Gral::_echo(Gral::getFechaToWeb($vta_presupuesto_conflicto->getCreado())) ?>
                    </div>
                </td>	

                <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                    <div class="descripcion">
                        <?php Gral::_echo($vta_presupuesto_ins_insumo->getDescripcion()); ?>
                    </div>
                </td>

                <td class="adm_tbl_lineas <?php echo $strong ?>" align="right">
                    <div class="importe_inicial">
                        <?php Gral::_echoImp($vta_presupuesto_conflicto->getImporteInicial()); ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas <?php echo $strong ?>" align="right">
                    <div class="importe_actualizado">
                        <?php Gral::_echoImp($vta_presupuesto_conflicto->getImporteActualizado()); ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas <?php echo $strong ?>" align="right">
                    <div class="importe_resuelto">
                        <?php Gral::_echoImp($vta_presupuesto_conflicto->getImporteResuelto()); ?>
                    </div>
                </td>

                <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                    <div class="observacion">
                        <?php Gral::_echo($vta_presupuesto_conflicto->getObservacion()); ?>
                    </div>
                </td>

                <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                    <div class="estado">
                        <?php $estado = ($vta_presupuesto_conflicto->getEstado() == 1) ? 0 : 1; ?>
                        <img src="imgs/btn_estado_<?php echo $estado ?>.gif" width="15" alt="hab" />
                    </div>
                </td>

            </tr>
        <?php } ?>
    <?php } ?>
</table>