<div class="titulo"><?php Lang::_lang('Emails') ?></div>

<div class="bloque-cli-cliente-email">
    <table border="0" class="tabla-modal">
        <tr>
            <td class="adm_tbl_encabezado" width="110" align='center'><?php Lang::_lang('Email') ?></td>
            <td class="adm_tbl_encabezado" width="350" align='center'><?php Lang::_lang('Observacion') ?></td>
            <td class="adm_tbl_encabezado" width="130" align='center'><?php Lang::_lang('Creado Por') ?></td>
        </tr>
        <?php
        foreach ($cli_emails as $cli_email) {
            ?>
            <tr>
                <td class="adm_tbl_lineas" align="center">
                    <div class="descripcion">
                        <?php Gral::_echo($cli_email->getDescripcion()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="left">
                    <div class="observacion">
                        <?php Gral::_echo($cli_email->getObservacion()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center">
                    <div class="creado-por">
                        <?php Gral::_echo($cli_email->getCreadoPorDescripcion()) ?>
                    </div>
                    <div class="creado">
                        <?php Gral::_echo(Gral::getFechaHoraToWeb($cli_email->getCreado())) ?>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
<br />