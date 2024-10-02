<div class="titulo"><?php Lang::_lang('Zonas') ?></div>

<div class="bloque-cli-cliente-gral-zona">
    <table border="0" class="tabla-modal">
        <tr>
            <td class="adm_tbl_encabezado" width="70" align='center'><?php Lang::_lang('Id') ?></td>
            <td class="adm_tbl_encabezado" width="300" align='center'><?php Lang::_lang('Zona') ?></td>
            <td class="adm_tbl_encabezado" width="130" align='center'><?php Lang::_lang('Creado Por') ?></td>
        </tr>
        <?php
        foreach ($gral_zona_cli_clientes as $gral_zona_cli_cliente) {
            $gral_zona = $gral_zona_cli_cliente->getGralZona();
            ?>
            <tr>
                <td class="adm_tbl_lineas" align="center">
                    <div class="gral-zona-id">
                        <?php Gral::_echo($gral_zona->getId()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center">
                    <div class="gral-zona-descripcion">
                        <?php Gral::_echo($gral_zona->getDescripcion()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center">
                    <div class="gral-zona-creado-por">
                        <?php Gral::_echo($gral_zona_cli_cliente->getCreadoPorDescripcion()) ?>
                    </div>
                    <div class="gral-zona-creado">
                        <?php Gral::_echo(Gral::getFechaHoraToWeb($gral_zona_cli_cliente->getCreado())) ?>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
<br />