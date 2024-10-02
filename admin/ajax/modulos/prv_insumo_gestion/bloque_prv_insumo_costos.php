<table border="0" class="tabla-modal">
    <tr>
        <td class="adm_tbl_encabezado" width="110" align='center'><?php Lang::_lang("Descripcion"); ?></td>
        <td class="adm_tbl_encabezado" width="110" align='center'><?php Lang::_lang("Fecha"); ?></td>
        <td class="adm_tbl_encabezado" width="140" align='center'><?php Lang::_lang("Creado Por") ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang("Importe Costo"); ?></td>
        <td class="adm_tbl_encabezado" width="500" align='center'><?php Lang::_lang("Observaciones"); ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Actual"); ?></td>
    </tr>
    <?php
    $cont = 0;
    foreach ($prv_insumo_costos as $prv_insumo_costo) {
        $cont++;
        $strong = ($cont == 1) ? 'strong' : '';
        
        ?>
        <tr>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="">
                    <?php Gral::_echo($prv_insumo_costo->getDescripcionBloqueMasInfo()) ?>					
                </div>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <?php Gral::_echo(Gral::getFechaHoraToWEB($prv_insumo_costo->getCreado())); ?>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <?php Gral::_echo($prv_insumo_costo->getCreadoPorDescripcion()); ?>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="right">
                <?php Gral::_echoImp($prv_insumo_costo->getImporteNeto()); ?>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                <?php Gral::_echo($prv_insumo_costo->getObservacion()); ?>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <img src="imgs/btn_estado_<?php echo $prv_insumo_costo->getActual(); ?>.gif" width="15" alt="hab" />
            </td>            
        </tr>
    <?php } ?>
</table>