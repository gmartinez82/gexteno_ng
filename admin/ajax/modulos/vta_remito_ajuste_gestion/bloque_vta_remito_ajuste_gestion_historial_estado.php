<table border="0" class="tabla-modal">
    <tr>
        <td class="adm_tbl_encabezado" width="40" align='center'><?php Lang::_lang("Id"); ?></td>
        <td class="adm_tbl_encabezado" width="110" align='center'><?php Lang::_lang("Fecha"); ?></td>
        <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang("Estado"); ?></td>
        <td class="adm_tbl_encabezado" width="50" align='center'><?php Lang::_lang("Bultos"); ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Peso"); ?></td>
        <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang("Emp de Transp"); ?></td>
        <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Costo"); ?></td>
        <td class="adm_tbl_encabezado" width="260" align='center'><?php Lang::_lang("Nota Interna"); ?></td>
        <td class="adm_tbl_encabezado" width="260" align='center'><?php Lang::_lang("Comentarios al Cliente"); ?></td>
        <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang("Creado por"); ?></td>
        <td class="adm_tbl_encabezado" width="50" align='center'><?php Lang::_lang("Actual"); ?></td>
    </tr>
    <?php
    $vta_remito_ajuste_estados = $vta_remito_ajuste->getVtaRemitoAjusteEstados();
    $cont = 0;
    foreach ($vta_remito_ajuste_estados as $vta_remito_ajuste_estado) {
        $cont++;
        $strong = ($cont == 1) ? 'strong' : '';
        $cantidas_bultos = ($vta_remito_ajuste_estado->getCantidadBultos() == 0) ? '' : $vta_remito_ajuste_estado->getCantidadBultos();
        $peso = ($vta_remito_ajuste_estado->getPeso() == 0) ? '' : $vta_remito_ajuste_estado->getPeso();
        $costo_envio = ($vta_remito_ajuste_estado->getCostoEnvio() == 0) ? '' : $vta_remito_ajuste_estado->getCostoEnvio();
        ?>
        <tr>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="id">
                    <?php Gral::_echo($vta_remito_ajuste_estado->getId()); ?>
                </div>
            </td>
            
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center" title="<?php Gral::_echo(Gral::getFechaHoraToWEB($vta_remito_ajuste_estado->getCreado(), true)); ?>">
                <div class="fecha">
                    <?php Gral::_echo(Gral::getFechaHoraToWEB($vta_remito_ajuste_estado->getCreado())); ?>
                </div>
            </td>

            <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                <div class="tipo-estado">
                    <img src="imgs/vta_remito_ajuste_tipo_estado/<?php Gral::_echo($vta_remito_ajuste_estado->getVtaRemitoAjusteTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
                    <?php Gral::_echo($vta_remito_ajuste_estado->getVtaRemitoAjusteTipoEstado()->getDescripcion()); ?>
                </div>
            </td>

            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="bultos">
                    <?php Gral::_echo($cantidas_bultos); ?>
                </div>
            </td>

            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="peso">
                    <?php Gral::_echo($peso); ?> kg
                </div>
            </td>

            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="empresa-transportadora">
                    <?php Gral::_echo($vta_remito_ajuste_estado->getGralEmpresaTransportadora()->getDescripcion()); ?>
                </div>
                <div class="nuemero-guia">
                    <?php Gral::_echo($vta_remito_ajuste_estado->getGuia()); ?>
                </div>
            </td>

            <td class="adm_tbl_lineas <?php echo $strong ?>" align="right">
                <div class="costo">
                    <?php if ($costo_envio != '') { ?>
                        <?php Gral::_echoImp($costo_envio); ?>
                    <?php } ?>
                </div>
            </td>
            
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                <div class="observacion">
                    <?php Gral::_echo($vta_remito_ajuste_estado->getNotaInterna()); ?>
                </div>
            </td>
            
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                <div class="observacion">
                    <?php Gral::_echo($vta_remito_ajuste_estado->getObservacion()); ?>
                </div>
            </td>

            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="creado-por">
                    <?php Gral::_echo($vta_remito_ajuste_estado->getCreadoPorDescripcion()); ?>
                </div>
            </td>

            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="actual">
                    <img src="imgs/btn_estado_<?php echo $vta_remito_ajuste_estado->getActual(); ?>.gif" width="15" alt="hab" />
                </div>
            </td>
        </tr>
    <?php } ?>
</table>