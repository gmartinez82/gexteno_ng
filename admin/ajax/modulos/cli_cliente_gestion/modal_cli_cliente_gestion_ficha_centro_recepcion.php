<div class="titulo"><?php Lang::_lang('Centros de Recepcion') ?></div>

<div class="bloque-cli-cliente-centro-recepcion">
    <table border="0" class="tabla-modal">
        <tr>
            <td class="adm_tbl_encabezado" width="130" align='center'><?php Lang::_lang('Descripcion') ?></td>
            <td class="adm_tbl_encabezado" width="110" align='center'><?php Lang::_lang('Ubicacion') ?></td>
            <td class="adm_tbl_encabezado" width="110" align='center'><?php Lang::_lang('Domicilio') ?></td>
            <td class="adm_tbl_encabezado" width="110" align='center'><?php Lang::_lang('Contacto') ?></td>
            <td class="adm_tbl_encabezado" width="110" align='center'><?php Lang::_lang('Codigo Postal') ?></td>
            <td class="adm_tbl_encabezado" width="200" align='center'><?php Lang::_lang('Observacion') ?></td>
            <td class="adm_tbl_encabezado" width="130" align='center'><?php Lang::_lang('Creado Por') ?></td>
        </tr>
        <?php
        foreach ($cli_centro_recepcions as $cli_centro_recepcion) {
            ?>
            <tr>
                <td class="adm_tbl_lineas" align="center">
                    <div class="descripcion">
                        <?php Gral::_echo($cli_centro_recepcion->getDescripcion()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center">
                    <div class="geo-localidad">
                        <?php Gral::_echo($cli_centro_recepcion->getGeoLocalidad()->getDescripcion()) ?>
                    </div>
                    <div class="geo-provincia">
                        <?php Gral::_echo($cli_centro_recepcion->getGeoLocalidad()->getGeoProvincia()->getDescripcion()) ?>
                    </div>
                    <div class="geo-pais">
                        <?php Gral::_echo($cli_centro_recepcion->getGeoLocalidad()->getGeoProvincia()->getGeoPais()->getDescripcion()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center">
                    <div class="domicilio">
                        <?php Gral::_echo($cli_centro_recepcion->getDomicilio()) ?>
                    </div>
                    <div class="responsable">
                        <?php Gral::_echo($cli_centro_recepcion->getResponsable()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center">
                    <div class="telefono">
                        <?php Gral::_echo($cli_centro_recepcion->getTelefono()) ?>
                    </div>
                    <div class="email">
                        <?php Gral::_echo($cli_centro_recepcion->getEmail()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center">
                    <div class="codigo-postal">
                        <?php Gral::_echo($cli_centro_recepcion->getCodigoPostal()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="left">
                    <div class="observacion">
                        <?php Gral::_echo($cli_centro_recepcion->getObservacion()) ?>
                    </div>
                </td>
                <td class="adm_tbl_lineas" align="center">
                    <div class="creado-por">
                        <?php Gral::_echo($cli_centro_recepcion->getCreadoPorDescripcion()) ?>
                    </div>
                    <div class="creado">
                        <?php Gral::_echo(Gral::getFechaHoraToWeb($cli_centro_recepcion->getCreado())) ?>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
<br />