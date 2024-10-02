<div class="titulo"><?php Lang::_lang('Convenio de Descuentos') ?></div>

<div class="bloque-prv-proveedor-convenio-descuento">
    <table border="0" class="tabla-modal">
        <tr>
            <td class="adm_tbl_encabezado" width="130" align='center'><?php Lang::_lang('Desccripcion') ?></td>
            <td class="adm_tbl_encabezado" width="130" align='center'><?php Lang::_lang('Porcentaje') ?></td>
            <td class="adm_tbl_encabezado" width="300" align='center'><?php Lang::_lang('Observacion') ?></td>
            <td class="adm_tbl_encabezado" width="130" align='center'><?php Lang::_lang('Creado Por') ?></td>
        </tr>
        <?php
        foreach ($prv_convenio_descuentos as $prv_convenio_descuento) {
            ?>
            <tr>
                <td class="adm_tbl_lineas" align="center">
                    <div class="descripcion">
                        <?php Gral::_echo($prv_convenio_descuento->getDescripcion()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center">
                    <div class="porcentaje">
                        <?php Gral::_echo($prv_convenio_descuento->getPorcentajeDescuento()) ?> %
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="left">
                    <div class="observacion">
                        <?php Gral::_echo($prv_convenio_descuento->getObservacion()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center">
                    <div class="creado-por">
                        <?php Gral::_echo($prv_convenio_descuento->getCreadoPorDescripcion()) ?>
                    </div>
                    <div class="creado">
                        <?php Gral::_echo(Gral::getFechaHoraToWeb($prv_convenio_descuento->getCreado())) ?>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
<br />