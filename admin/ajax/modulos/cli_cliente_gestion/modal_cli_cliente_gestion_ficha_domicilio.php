<div class="titulo"><?php Lang::_lang('Domicilios') ?></div>

<div class="bloque-cli-cliente-domicilio">
    <table border="0" class="tabla-modal">
        <tr>
            <td class="adm_tbl_encabezado" width="170" align='center'><?php Lang::_lang('Domicilio') ?></td>
            <td class="adm_tbl_encabezado" width="350" align='center'><?php Lang::_lang('Observacion') ?></td>
            <td class="adm_tbl_encabezado" width="130" align='center'><?php Lang::_lang('Creado Por') ?></td>
        </tr>
        <?php
        foreach ($cli_domicilios as $cli_domicilio) {
            ?>
            <tr>
                <td class="adm_tbl_lineas" align="center">
                    <div class="descripcion">
                        <?php Gral::_echo($cli_domicilio->getDescripcion()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="left">
                    <div class="observacion">
                        <?php Gral::_echo($cli_domicilio->getObservacion()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center">
                    <div class="creado-por">
                        <?php Gral::_echo($cli_domicilio->getCreadoPorDescripcion()) ?>
                    </div>
                    <div class="creado">
                        <?php Gral::_echo(Gral::getFechaHoraToWeb($cli_domicilio->getCreado())) ?>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
<br />