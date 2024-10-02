
<div class="titulo"><?php Lang::_lang('Historial de Estados de la OrdenPago') ?></div>

<div class="bloque-historial-estados">
    <table border="0" class="tabla-modal">
        <tr>
            <td class="adm_tbl_encabezado" width="80" align='center'><?php Lang::_lang("Fecha"); ?></td>
            <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang("Estado"); ?></td>
            <td class="adm_tbl_encabezado" width="300" align='center'><?php Lang::_lang("Nota Interna"); ?></td>
            <td class="adm_tbl_encabezado" width="300" align='center'><?php Lang::_lang("Nota Publica"); ?></td>
            <td class="adm_tbl_encabezado" width="100" align='center'><?php Lang::_lang("Creado por"); ?></td>
            <td class="adm_tbl_encabezado" width="50" align='center'><?php Lang::_lang("Actual"); ?></td>
        </tr>
        <?php
        $cont = 0;
        foreach ($pde_orden_pago_estados as $pde_orden_pago_estado) {
            $cont++;
            $strong = ($cont == 1) ? 'strong' : '';
            ?>
            <tr>
                <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                    <div class="fecha">
                        <?php Gral::_echo(Gral::getFechaHoraToWEB($pde_orden_pago_estado->getCreado())); ?>
                    </div>
                </td>

                <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                    <div class="tipo-estado">
                        <img src="imgs/pde_orden_pago_tipo_estado/<?php Gral::_echo($pde_orden_pago_estado->getPdeOrdenPagoTipoEstado()->getCodigo()) ?>.png" alt="tipo-estado" width="15" />
                        <?php Gral::_echo($pde_orden_pago_estado->getPdeOrdenPagoTipoEstado()->getDescripcion()); ?>
                    </div>
                </td>

                <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                    <div class="observacion">
                        <?php Gral::_echo($pde_orden_pago_estado->getObservacion()); ?>
                    </div>

                    <?php if ($pde_orden_pago_estado->getPrvPreventistaId() != 'null') { ?>
                        <div class="preventista">
                            Preventista: <strong><?php Gral::_echo($pde_orden_pago_estado->getPrvPreventista()->getDescripcion()); ?></strong>                      
                        </div>
                    <?php } ?>

                    <?php if ($pde_orden_pago_estado->getGralEmpresaTransportadoraId() != 'null') { ?>
                        <div class="empresa-transportadora">
                            Emp Transp: <strong><?php Gral::_echo($pde_orden_pago_estado->getGralEmpresaTransportadora()->getDescripcion()); ?></strong>                      
                        </div>

                        <div class="guia">
                            Guia: <strong><?php Gral::_echo($pde_orden_pago_estado->getGuia()); ?></strong>                      
                        </div>
                    <?php } ?>

                </td>

                <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                    <div class="observacion">
                        <?php Gral::_echo($pde_orden_pago_estado->getNotaPublica()); ?>
                    </div>
                </td>

                <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                    <div class="creado-por">
                        <?php Gral::_echo($pde_orden_pago_estado->getCreadoPorDescripcion()); ?>
                    </div>
                </td>

                <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                    <div class="actual">
                        <img src="imgs/btn_estado_<?php echo $pde_orden_pago_estado->getActual(); ?>.gif" width="15" alt="hab" />
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
<br />

