<table border="0" class="tabla-modal">
    <tr>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Fecha"); ?></td>
        <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang("Estado"); ?></td>
        <td class="adm_tbl_encabezado" width="350" align='center'><?php Lang::_lang("Observacion"); ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang("Creado por"); ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Actual"); ?></td>
    </tr>
    <?php
    $pde_nota_credito_estados = $pde_nota_credito->getPdeNotaCreditoEstados();
    $cont = 0;
    foreach ($pde_nota_credito_estados as $pde_nota_credito_estado) {
        $cont++;
        $strong = ($cont == 1) ? 'strong' : '';

        ?>
        <tr>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="fecha">
                    <?php Gral::_echo(Gral::getFechaHoraToWEB($pde_nota_credito_estado->getCreado())); ?>
                </div>
            </td>

            <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                <div class="tipo-estado">
                    <img src="imgs/pde_nota_credito_tipo_estado/<?php Gral::_echo($pde_nota_credito_estado->getPdeNotaCreditoTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
                    <?php Gral::_echo($pde_nota_credito_estado->getPdeNotaCreditoTipoEstado()->getDescripcion()); ?>
                </div>
            </td>
            
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                <div class="observacion">
                    <?php Gral::_echo($pde_nota_credito_estado->getObservacion()); ?>
                </div>
            </td>

            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="creado-por">
                    <?php Gral::_echo($pde_nota_credito_estado->getCreadoPorDescripcion()); ?>
                </div>
            </td>

            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="actual">
                    <img src="imgs/btn_estado_<?php echo $pde_nota_credito_estado->getActual(); ?>.gif" width="15" alt="hab" />
                </div>
            </td>
        </tr>
    <?php } ?>
</table>