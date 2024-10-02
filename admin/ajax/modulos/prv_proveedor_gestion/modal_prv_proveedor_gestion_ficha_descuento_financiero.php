<div class="titulo"><?php Lang::_lang('Descuentos Financieros') ?></div>

<div class="bloque-prv-proveedor-descuento-financiero">
    <table border="0" class="tabla-modal">
        <tr>
            <td class="adm_tbl_encabezado" width="130" align='center'><?php Lang::_lang('Descripcion') ?></td>
            <td class="adm_tbl_encabezado" width="130" align='center'><?php Lang::_lang('Porcentaje') ?></td>
            <td class="adm_tbl_encabezado" width="300" align='center'><?php Lang::_lang('Observacion') ?></td>
            <td class="adm_tbl_encabezado" width="130" align='center'><?php Lang::_lang('Creado Por') ?></td>
        </tr>
        <?php
        foreach ($prv_descuento_financieros as $prv_descuento_financiero) {
            ?>
            <tr>
                <td class="adm_tbl_lineas" align="center">
                    <div class="descripcion">
                        <?php Gral::_echo($prv_descuento_financiero->getDescripcion()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center">
                    <div class="porcentaje">
                        <?php Gral::_echo($prv_descuento_financiero->getPorcentajeDescuento()) ?>  %
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="left">
                    <div class="observacion">
                        <?php Gral::_echo($prv_descuento_financiero->getObservacion()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center">
                    <div class="creado-por">
                        <?php Gral::_echo($prv_descuento_financiero->getCreadoPorDescripcion()) ?>
                    </div>
                    <div class="creado">
                        <?php Gral::_echo(Gral::getFechaHoraToWeb($prv_descuento_financiero->getCreado())) ?>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
<br />