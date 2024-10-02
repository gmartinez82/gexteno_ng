<table border="0" class="tabla-modal">
    <tr>
        <td class="adm_tbl_encabezado" width="110" align='center'><?php Lang::_lang("Fecha"); ?></td>
        <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang("Estado"); ?></td>
        <td class="adm_tbl_encabezado" width="300" align='center'><?php Lang::_lang("Observaciones"); ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Creado por"); ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Actual"); ?></td>
    </tr>
    <?php
//    $vta_orden_venta = new VtaOrdenVenta();
    $vta_orden_venta_estado_remisions = $vta_orden_venta->getVtaOrdenVentaEstadoRemisions();
    $cont = 0;
    foreach ($vta_orden_venta_estado_remisions as $vta_orden_venta_estado_remision) {
        $cont++;
        $strong = ($cont == 1) ? 'strong' : '';
        ?>
        <tr>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="fecha">
                    <?php Gral::_echo(Gral::getFechaHoraToWEB($vta_orden_venta_estado_remision->getCreado())); ?>
                </div>
            </td>

            <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                <div class="tipo-estado">
                    <img src="imgs/vta_orden_venta_tipo_estado_remision/<?php Gral::_echo($vta_orden_venta_estado_remision->getVtaOrdenVentaTipoEstadoRemision()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
                    <?php Gral::_echo($vta_orden_venta_estado_remision->getVtaOrdenVentaTipoEstadoRemision()->getDescripcion()); ?>
                </div>
            </td>

            <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                <div class="observacion">
                    <?php Gral::_echo($vta_orden_venta_estado_remision->getObservacion()); ?>
                </div>
            </td>

            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="creado-por">
                    <?php Gral::_echo($vta_orden_venta_estado_remision->getCreadoPorDescripcion()); ?>
                </div>
            </td>

            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="actual">
                    <img src="imgs/btn_estado_<?php echo $vta_orden_venta_estado_remision->getActual(); ?>.gif" width="15" alt="hab" />
                </div>
            </td>
        </tr>
    <?php } ?>
</table>