
<div class="titulo"><?php Lang::_lang('Historial de Estados del Cheque') ?></div>
    <div class="bloque-historial-estados">
        <table border="0" class="tabla-modal">
            <tr>
                <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Fecha"); ?></td>
                <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang("Estado"); ?></td>
                <td class="adm_tbl_encabezado" width="350" align='center'><?php Lang::_lang("Observacion"); ?></td>
                <td class="adm_tbl_encabezado" width="300" align='center'><?php Lang::_lang("Caja"); ?></td>
                <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang("Creado por"); ?></td>
                <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Actual"); ?></td>
            </tr>
            <?php
            $fnd_chq_estados = $fnd_chq_cheque->getFndChqEstados();
            $cont = 0;
            foreach ($fnd_chq_estados as $fnd_chq_estado) {
                $cont++;
                $strong = ($cont == 1) ? 'strong' : '';
                $gral_caja  = $fnd_chq_estado->getGralCaja(); 
                ?>
                <tr>
                    <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                        <div class="fecha">
                            <?php Gral::_echo(Gral::getFechaHoraToWEB($fnd_chq_estado->getCreado())); ?>
                        </div>
                    </td>

                    <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                        <div class="tipo-estado">
                            <img src="imgs/fnd_chq_tipo_estado/<?php Gral::_echo($fnd_chq_estado->getFndChqTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
                            <?php Gral::_echo($fnd_chq_estado->getFndChqTipoEstado()->getDescripcion()); ?>
                        </div>
                    </td>
                    
                    <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                        <div class="observacion">
                            <?php Gral::_echo($fnd_chq_estado->getObservacion()); ?>
                        </div>
                    </td>

                    <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                        <div class="caja">
                            <?php if($gral_caja && $gral_caja->getId() != 'null' ): ?>
                            <?php Gral::_echo($gral_caja->getDescripcion()); ?>
                            <?php endif; ?>
                        </div>
                    </td>

                    <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                        <div class="creado-por">
                            <?php Gral::_echo($fnd_chq_estado->getCreadoPorDescripcion()); ?>
                        </div>
                    </td>

                    <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                        <div class="actual">
                            <img src="imgs/btn_estado_<?php echo $fnd_chq_estado->getActual(); ?>.gif" width="15" alt="hab" />
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>
<br />