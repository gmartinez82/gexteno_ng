<div class="titulo"><?php Lang::_lang('Domicilios') ?></div>

<div class="bloque-prv-proveedor-domicilio">
    <table border="0" class="tabla-modal">
        <tr>
            <td class="adm_tbl_encabezado" width="270" align='center'><?php Lang::_lang('Domicilio') ?></td>
            <td class="adm_tbl_encabezado" width="350" align='center'><?php Lang::_lang('Observacion') ?></td>
            <td class="adm_tbl_encabezado" width="130" align='center'><?php Lang::_lang('Creado Por') ?></td>
        </tr>
        <?php
        foreach ($prv_domicilios as $prv_domicilio) {
            ?>
            <tr>
                <td class="adm_tbl_lineas" align="center">
                    <div class="descripcion">
                        <?php Gral::_echo($prv_domicilio->getDescripcion()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="left">
                    <div class="observacion">
                        <?php Gral::_echo($prv_domicilio->getObservacion()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center">
                    <div class="creado-por">
                        <?php Gral::_echo($prv_domicilio->getCreadoPorDescripcion()) ?>
                    </div>
                    <div class="creado">
                        <?php Gral::_echo(Gral::getFechaHoraToWeb($prv_domicilio->getCreado())) ?>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
<br />