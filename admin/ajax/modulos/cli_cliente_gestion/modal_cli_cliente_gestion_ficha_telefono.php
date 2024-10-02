<div class="titulo"><?php Lang::_lang('Telefonos') ?></div>

<div class="bloque-cli-cliente-telefono">
    <table border="0" class="tabla-modal">
        <tr>
            <td class="adm_tbl_encabezado" width="110" align='center'><?php Lang::_lang('Tipo') ?></td>
            <td class="adm_tbl_encabezado" width="110" align='center'><?php Lang::_lang('Pais') ?></td>
            <td class="adm_tbl_encabezado" width="110" align='center'><?php Lang::_lang('Cod. Area') ?></td>
            <td class="adm_tbl_encabezado" width="110" align='center'><?php Lang::_lang('Telefono') ?></td>
            <td class="adm_tbl_encabezado" width="300" align='center'><?php Lang::_lang('Observacion') ?></td>
            <td class="adm_tbl_encabezado" width="130" align='center'><?php Lang::_lang('Creado Por') ?></td>
        </tr>
        <?php
        foreach ($cli_telefonos as $cli_telefono) {
            ?>
            <tr>
                <td class="adm_tbl_lineas" align="center">
                    <div class="tipo">
                        <?php Gral::_echo($cli_telefono->getCliTelefonoTipo()->getDescripcion()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center">
                    <div class="pais">
                        <?php Gral::_echo($cli_telefono->getGeoPais()->getDescripcion()) ?>
                    </div>
                </td>    
                <td class="adm_tbl_lineas" align="center">
                    <div class="cod-area">
                        <?php Gral::_echo($cli_telefono->getCodigo()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center">
                    <div class="telefono">
                        <?php Gral::_echo($cli_telefono->getTelefono()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="left">
                    <div class="observacion">
                        <?php Gral::_echo($cli_telefono->getObservacion()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center">
                    <div class="creado-por">
                        <?php Gral::_echo($cli_telefono->getCreadoPorDescripcion()) ?>
                    </div>
                    <div class="creado">
                        <?php Gral::_echo(Gral::getFechaHoraToWeb($cli_telefono->getCreado())) ?>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
<br />