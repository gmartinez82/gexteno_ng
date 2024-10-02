<table border="0" class="tabla-modal">
    <tr>
        <td class="adm_tbl_encabezado" width="50" align='center'>#</td>
        <td class="adm_tbl_encabezado" width="150" align='center'><?php Lang::_lang('Codigo') ?></td>
        <td class="adm_tbl_encabezado" width="50" align='center'><?php Lang::_lang('Cant') ?></td>
        <td class="adm_tbl_encabezado" width="600" align='center'><?php Lang::_lang('Insumo') ?></td>
        <td class="adm_tbl_encabezado" width="150" align='center'>&nbsp;</td>
    </tr>
    <?php
    $cont = 0;
    foreach ($pdi_pedidos as $pdi_pedido) {
        $cont++;
        $strong = ($cont == 1) ? 'strong' : '';

        $pdi_estado_actual = $pdi_pedido->getPdiEstadoActual();
        $pdi_cantidad = $pdi_estado_actual->getCantidad();
        $pdi_estados = $pdi_pedido->getPdiEstados();
        ?>
        <tr>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="contador">
                    <?php Gral::_echo($cont) ?>
                </div>
            </td>   
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="codigo">
                    <?php Gral::_echo($pdi_pedido->getCodigo()); ?>
                </div>
                <div class="fecha">
                    <?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_pedido->getCreado())); ?> hs.
                </div>
                <div class="tipo-estado">
                    <img src='imgs/pdi_estado/<?php Gral::_echo($pdi_pedido->getPdiTipoEstado()->getCodigo()); ?>.png' width="10" align='absmiddle' />
                    &nbsp;
                    <?php Gral::_echo($pdi_pedido->getPdiTipoEstado()->getDescripcion()); ?>
                </div>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="cantidad">
                    <?php Gral::_echo($pdi_cantidad); ?>
                </div>
            </td>    
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="left">
                <div class="descripcion">
                    <?php Gral::_echo($pdi_pedido->getInsInsumo()->getDescripcion()); ?>
                </div>
                <div class="codigo-interno">
                    <?php Gral::_echo($pdi_pedido->getInsInsumo()->getCodigoInterno()); ?>
                </div>
                <div class="marca">
                    <?php Gral::_echo($pdi_pedido->getInsInsumo()->getInsMarca()->getDescripcion()); ?>: <?php Gral::_echo($pdi_pedido->getInsInsumo()->getCodigoMarca()); ?>
                </div>
                <div class="pdi-estados">
                    <?php foreach ($pdi_estados as $pdi_estado) { ?>
                        <div class="pdi-estado">
                            - <?php Gral::_echo($pdi_estado->getCantidad()); ?> <?php Gral::_echo($pdi_estado->getPdiTipoEstado()->getDescripcion()); ?> - <?php Gral::_echo(Gral::getFechaHoraToWeb($pdi_estado->getCreado())); ?> - <?php Gral::_echo($pdi_estado->getObservacion()); ?>
                        </div>
                    <?php } ?>
                </div>
            </td>
            <td class="adm_tbl_lineas <?php echo $strong ?>" align="center">
                <div class="creado-por">
                    <img src='imgs/icn_usuario.gif' width="15" align='absmiddle' alt="usuario" title="<?php Gral::_echo($pdi_pedido->getCreadoPorDescripcion()) ?>" /> <?php Gral::_echo($pdi_pedido->getCreadoPorDescripcion()) ?>
                </div>
            </td>
        </tr>
    <?php } ?>
</table>
<br />
