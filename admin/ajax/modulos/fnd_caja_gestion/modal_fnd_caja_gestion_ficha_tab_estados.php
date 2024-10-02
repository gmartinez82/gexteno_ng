
<div class="titulo"><?php Lang::_lang('Historial de Estados de la Caja') ?></div>

<div class="bloque-historial-estados">
    <table border="0" class="tabla-modal">
        <tr>
            <td class="adm_tbl_encabezado" width="140" align='center'><?php Lang::_lang("Fecha"); ?></td>
            <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang("Estado"); ?></td>
            <td class="adm_tbl_encabezado" width="300" align='center'><?php Lang::_lang("Observaciones"); ?></td>
            <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang("Creado por"); ?></td>
            <td class="adm_tbl_encabezado" width="50" align='center'><?php Lang::_lang("Actual"); ?></td>
        </tr>
        <?php
        $cont = 0;
        foreach ($fnd_caja_estados as $fnd_caja_estado):
            $cont++;
            $strong = ($cont == 1) ? 'strong' : '';
            ?>
            <tr>
                <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                    <div class="fecha">
                        <?php Gral::_echo(Gral::getFechaHoraToWEB($fnd_caja_estado->getCreado())); ?>
                    </div>
                </td>

                <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                    <div class="tipo-estado">
                        <img src="imgs/fnd_caja_tipo_estado/<?php Gral::_echo($fnd_caja_estado->getFndCajaTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
                        <?php Gral::_echo($fnd_caja_estado->getFndCajaTipoEstado()->getDescripcion()); ?>
                    </div>
                </td>

                <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                    <div class="observacion">
                        <?php Gral::_echo($fnd_caja_estado->getObservacion()); ?>
                    </div>
                </td>

                <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                    <div class="creado-por">
                        <?php Gral::_echo($fnd_caja_estado->getCreadoPorDescripcion()); ?>
                    </div>
                </td>

                <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                    <div class="actual">
                        <img src="imgs/btn_estado_<?php echo $fnd_caja_estado->getActual(); ?>.gif" width="15" alt="hab" />
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<br />

