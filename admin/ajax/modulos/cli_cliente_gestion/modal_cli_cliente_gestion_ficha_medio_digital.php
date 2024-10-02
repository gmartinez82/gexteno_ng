<div class="titulo"><?php Lang::_lang('Medios Digitales') ?></div>

<div class="bloque-cli-cliente-medio-digital">
    <table border="0" class="tabla-modal">
        <tr>
            <td class="adm_tbl_encabezado" width="200" align='center'><?php Lang::_lang('Enlace') ?></td>
            <td class="adm_tbl_encabezado" width="110" align='center'><?php Lang::_lang('Medio Digital') ?></td>
            <td class="adm_tbl_encabezado" width="350" align='center'><?php Lang::_lang('Observacion') ?></td>
            <td class="adm_tbl_encabezado" width="130" align='center'><?php Lang::_lang('Creado Por') ?></td>
        </tr>
        <?php
        foreach ($cli_medio_digitals as $cli_medio_digital) {
            ?>
            <tr>
                <td class="adm_tbl_lineas" align="center">
                    <div class="descripcion">
                        <?php Gral::_echo($cli_medio_digital->getDescripcion()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center">
                    <div class="medio-digital">
                        <?php Gral::_echo($cli_medio_digital->getCliTipoMedioDigital()->getDescripcion()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="left">
                    <div class="observacion">
                        <?php Gral::_echo($cli_medio_digital->getObservacion()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center">
                    <div class="creado-por">
                        <?php Gral::_echo($cli_medio_digital->getCreadoPorDescripcion()) ?>
                    </div>
                    <div class="creado">
                        <?php Gral::_echo(Gral::getFechaHoraToWeb($cli_medio_digital->getCreado())) ?>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
<br />