<table border="0" class="tabla-modal">
    <tr>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Fecha"); ?></td>
        <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang("Estado"); ?></td>
        <td class="adm_tbl_encabezado" width="350" align='center'><?php Lang::_lang("Observacion"); ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang("Creado por"); ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Actual"); ?></td>
    </tr>
    <?php
    $vta_ajuste_haber_estados = $vta_ajuste_haber->getVtaAjusteHaberEstados();
    $cont = 0;
    foreach ($vta_ajuste_haber_estados as $vta_ajuste_haber_estado) {
        $cont++;
        $strong = ($cont == 1) ? 'strong' : '';

        ?>
        <tr>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="fecha">
                    <?php Gral::_echo(Gral::getFechaHoraToWEB($vta_ajuste_haber_estado->getCreado())); ?>
                </div>
            </td>

            <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                <div class="tipo-estado">
                    <img src="imgs/vta_ajuste_haber_tipo_estado/<?php Gral::_echo($vta_ajuste_haber_estado->getVtaAjusteHaberTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
                    <?php Gral::_echo($vta_ajuste_haber_estado->getVtaAjusteHaberTipoEstado()->getDescripcion()); ?>
                </div>
            </td>
            
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                <div class="observacion">
                    <?php Gral::_echo($vta_ajuste_haber_estado->getObservacion()); ?>
                </div>
            </td>

            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="creado-por">
                    <?php Gral::_echo($vta_ajuste_haber_estado->getCreadoPorDescripcion()); ?>
                </div>
            </td>

            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="actual">
                    <img src="imgs/btn_estado_<?php echo $vta_ajuste_haber_estado->getActual(); ?>.gif" width="15" alt="hab" />
                </div>
            </td>
        </tr>
    <?php } ?>
</table>