<table border="0" class="tabla-modal" id="tbl_insumo_gestion_ficha_costos">
    <tr>
        <td class="adm_tbl_encabezado" width="120" align='center'><?php Lang::_lang('Fecha') ?></td>
        <td class="adm_tbl_encabezado" width="140" align='center'><?php Lang::_lang('Creado Por') ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang('Importe Costo') ?></td>
        <td class="adm_tbl_encabezado" width="600" align='center'><?php Lang::_lang('Motivo') ?> / <?php Lang::_lang('Observaciones') ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang('Actual') ?></td>
    </tr>
    <?php
    $cont = 0;
    foreach ($ins_insumo_costos as $ins_insumo_costo) {
        $cont++;
        $strong = ($cont == 1) ? 'strong' : '';
        
        ?>
        <tr>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <?php Gral::_echo(Gral::getFechaHoraToWEB($ins_insumo_costo->getCreado())) ?>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <?php Gral::_echo($ins_insumo_costo->getCreadoPorDescripcion()) ?>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="right">
                <?php Gral::_echoImp($ins_insumo_costo->getCosto()) ?>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                <div class="motivo">
                    <?php Gral::_echo($ins_insumo_costo->getDescripcion()) ?>
                </div>
                <div class="observacion">
                    <?php Gral::_echo($ins_insumo_costo->getObservacion()) ?>
                </div>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <img src="imgs/btn_estado_<?php echo $ins_insumo_costo->getActual() ?>.gif" width="15" alt="hab" />
            </td>
        </tr>
    <?php } ?>
</table>