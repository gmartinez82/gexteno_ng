<div class="titulo"><?php Lang::_lang('Exenciones de Tributos') ?></div>

<div class="bloque-cli-cliente-exencion-tributo">
    <table border="0" class="tabla-modal">
        <tr>
            <td class="adm_tbl_encabezado" width="300" align='center'><?php Lang::_lang('Tributo') ?></td>
            <td class="adm_tbl_encabezado" width="110" align='center'><?php Lang::_lang('Fecha Inicio') ?></td>
            <td class="adm_tbl_encabezado" width="110" align='center'><?php Lang::_lang('Fecha Fin') ?></td>
            <td class="adm_tbl_encabezado" width="350" align='center'><?php Lang::_lang('Observacion') ?></td>
            <td class="adm_tbl_encabezado" width="130" align='center'><?php Lang::_lang('Creado Por') ?></td>
        </tr>
        <?php
        foreach ($vta_tributo_exencions as $vta_tributo_exencion) {
            ?>
            <tr>
                <td class="adm_tbl_lineas" align="center">
                    <div class="descripcion">
                        <?php Gral::_echo($vta_tributo_exencion->getDescripcion()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center">
                    <div class="fecha-inicio">
                        <?php Gral::_echo(Gral::getFechaToWeb($vta_tributo_exencion->getFechaInicio())) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center">
                    <div class="fecha-fin">
                        <?php Gral::_echo(Gral::getFechaToWeb($vta_tributo_exencion->getFechaFin())) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="left">
                    <div class="observacion">
                        <?php Gral::_echo($vta_tributo_exencion->getObservacion()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center">
                    <div class="creado-por">
                        <?php Gral::_echo($vta_tributo_exencion->getCreadoPorDescripcion()) ?>
                    </div>
                    <div class="creado">
                        <?php Gral::_echo(Gral::getFechaHoraToWeb($vta_tributo_exencion->getCreado())) ?>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
<br />